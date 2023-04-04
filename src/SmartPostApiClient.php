<?php

namespace inkr\SmartPost;

use inkr\SmartPost\Model\CodPayment\CodPaymentResponse;
use inkr\SmartPost\Model\CourierVisitTime\CourierVisitTimeResponse;
use inkr\SmartPost\Model\Order\OrderCreateRequest;
use inkr\SmartPost\Model\Order\OrderCreateResponse;
use inkr\SmartPost\Model\OrderTracking\OrderTrackingResponse;
use inkr\SmartPost\Model\Place\PlaceResponse;
use inkr\SmartPost\Model\Exception\SmartPostApiClientException;
use inkr\SmartPost\Model\Exception\SmartPostApiClientExceptionUnauthorized;

class SmartPostApiClient
{
  /**
   * @var SmartPostApiClientConf
   */
  private $apiConf;
  /**
   * Reusable handler
   *
   * @var resource
   */
  private $curlHandle;

  /**
   * @param SmartPostApiClientConf $conf
   */
  public function __construct(SmartPostApiClientConf $conf)
  {
    $this->apiConf = $conf;
  }

  /**
   * @param string $country
   * @param ?string $type
   * @param ?string $filter
   * @return PlaceResponse[]
   */
  public function getPlaces(string $country, string $type = null, string $filter = null): array
  {
    $res = [];
    foreach ($this->apiGet('places', array_filter([
      'country' => $country,
      'type' => $type,
      'filter' => $filter
    ]))->places->item as $item)
    {
      $res[] = (new PlaceResponse())
        ->setPlaceId($item->place_id)
        ->setName($item->name)
        ->setCity($item->city)
        ->setAddress($item->address)
        ->setCountry($item->country)
        ->setPostalcode($item->postalcode)
        ->setRoutingcode($item->routingcode)
        ->setAvailability($item->availability)
        ->setDescription($item->description)
        ->setType($item->type)
        ->setLat($item->lat ? (float) $item->lat : null)
        ->setLng($item->lng ? (float) $item->lng : null)
        ->setGroupId((int) $item->group_id)
        ->setGroupName($item->group_name)
        ->setGroupSort((int) $item->group_sort)
        ->setCreateDate($item->created_date)
        ->setUpdateDate($item->updated_date)
      ;
    }

    return $res;
  }

  /**
   * @param string|null $placeId
   * @param string|null $type
   * @return CourierVisitTimeResponse[]
   */
  public function getCourierVisitTimes(string $placeId = null, string $type = null): array
  {
    $res = [];
    foreach ($this->apiGet('courier-visit-times', array_filter([
      'place_id' => $placeId,
      'type' => $type
    ]))->visit_times->item as $item)
    {
      $res[] = (new CourierVisitTimeResponse())
        ->setPlaceId($item->place_id)
        ->setDay($item->day)
        ->setIn($item->in)
        ->setOut($item->out)
        ->setExpressIn($item->express_in)
        ->setExpressOut($item->express_out);
    }

    return $res;
  }

  /**
   * @param OrderCreateRequest[] $request
   * @return OrderCreateResponse[]
   */
  public function createOrders(array $request): array
  {
    $res = [];
    foreach ($this->apiPost('orders', [],
      json_encode([
        'report' => [],
        'item' => array_map(function (OrderCreateRequest $r) {
          return $r->getValues();
        }, $request)
      ])
    )->orders->item as $item)
    {
      $res[] = (new OrderCreateResponse())
        ->setReference($item->reference)
        ->setBarcode($item->barcode)
        ->setSenderDoorcode($item->doorcode);
    }
    return $res;
  }

  /**
   * PDF file URL to get a Label
   *
   * @param string[] $barcode
   * @param string $format
   * @return string
   */
  public function getLabels(array $barcode, string $format = ''): string
  {
    return $this->apiGet('labels', array_filter([
      'barcode' => $barcode,
      'format' => $format
    ]));
  }

  /**
   * @param string[] $barcode
   * @param string[] $reference
   * @return OrderTrackingResponse[]
   */
  public function getTracking(array $barcode = [], array $reference = []): array
  {
    $res = [];
    foreach ($this->apiGet('tracking', array_filter([
      'barcode' => $barcode,
      'reference' => $reference
    ]))->orders->item as $item)
    {
      $res[] = (new OrderTrackingResponse())
        ->setBarcode($item->barcode)
        ->setReference($item->reference)
        ->setGenerated(SmartPostApiClientHelper::toDate($item->generated))
        ->setSize($item->size)
        ->setSourceIn(SmartPostApiClientHelper::toDate($item->sourcein))
        ->setSourceOut(SmartPostApiClientHelper::toDate($item->sourceout))
        ->setTermIn(SmartPostApiClientHelper::toDate($item->termin))
        ->setTermOut(SmartPostApiClientHelper::toDate($item->termout))
        ->setDestinationIn(SmartPostApiClientHelper::toDate($item->destinationin))
        ->setDestinationOut(SmartPostApiClientHelper::toDate($item->destinationout))
        ->setReturnIn(SmartPostApiClientHelper::toDate($item->returnin))
        ->setReturnOut(SmartPostApiClientHelper::toDate($item->returnout))
        ->setReturnTermIn(SmartPostApiClientHelper::toDate($item->returntermin))
        ->setReturnTermOut(SmartPostApiClientHelper::toDate($item->returntermout))
      ;
    }

    return $res;
  }

  /**
   * @param string $bankTransactionDate
   * @param int|null $getOneDay
   * @return CodPaymentResponse[]
   */
  public function getCodPayments(string $bankTransactionDate, int $getOneDay = null): array
  {
    $res = [];
    foreach ($this->apiGet('cod-payments', array_filter([
      'bank_transackton_date' => $bankTransactionDate,
      'get_one_day' => $getOneDay
    ]))->payments->item as $item)
    {
      $res[] = (new CodPaymentResponse())
        ->setAmount($item->amount)
        ->setBarcode($item->barcode)
        ->setName($item->name)
        ->setPaymentDate($item->payment_date)
        ->setRef($item->ref)
        ->setTCbanktrans($item->t_cbanktrans);
    }

    return $res;
  }



  private function apiGet(string $query, array $params)
  {
    return $this->call(SmartPostApiClientHelper::buildUrl($query, $params), [
        CURLOPT_HTTPGET => true
      ]
    );
  }

  private function apiPost(string $query, array $params, string $body)
  {
    return $this->call(SmartPostApiClientHelper::buildUrl($query, $params), [
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $body
      ]
    );
  }

  private function call(string $url, $requestOptions)
  {
    if (is_resource($this->curlHandle))
    {
      curl_reset($this->curlHandle);
    }
    else
    {
      $this->curlHandle = curl_init();
    }

    $requestOptions = $requestOptions + [
      CURLOPT_URL => $this->apiConf->getApiUrl() . $url,
      CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_HTTPHEADER => array_filter([
          $this->apiConf->getAuthKey() ? sprintf('Authorization: %s', $this->apiConf->getAuthKey()) : null,
          $this->apiConf->getGatewaySecret() ? sprintf('X-Gateway-Secret: %s', $this->apiConf->getGatewaySecret()) : null,
          'Content-Type: application/json'
      ])
    ];

    curl_setopt_array($this->curlHandle, $requestOptions);

    $res = curl_exec($this->curlHandle);
    $curlInfo = curl_getinfo($this->curlHandle);

    if ($curlInfo['content_type'] === 'application/json')
    {
      if (is_null($res = json_decode($res)))
      {
        throw new SmartPostApiClientException('Invalid JSON response');
      }
    }

//    print_r($res);

    switch ($curlInfo['http_code'])
    {
      case 200:
        return $res;
      case 400:
        $errors = [];
        if (is_array($res->error->item))
        {
          foreach ($res->error->item as $item)
          {
            $errors[] = $item->error->text;
          }
        }
        else
        {
          $errors[] = $res->error->item;
        }
        throw new SmartPostApiClientException(implode('; ', $errors));
      case 401:
        throw new SmartPostApiClientExceptionUnauthorized();
      default:
        throw new SmartPostApiClientException(null, $curlInfo['http_code']);
    }
  }

}
