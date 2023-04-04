<?php

namespace inkr\SmartPost\Model\Order;

use inkr\SmartPost\Model\RequestAbstraction;

class OrderCreateRequest extends RequestAbstraction
{
  /**
   * Shipments barcode
   * If the sender wants to add these, the format must be set up in advance to pass the validation process!
   * Please turn to the Itella salesperson first.
   *
   * @var string
   */
  protected $barcode;
  /**
   * Customer’s reference number (showing on the label)
   *
   * @var string
   */
  protected $reference;
  /**
   * Shipment content (showing on the label)
   *
   * @var string
   */
  protected $content;
  /**
   * Creates so many parcels with the same data as given here. Enables printing out labels with the same order info
   * with different barcodes (parcel is too big for APT locker and is divided into several orders). The inserted number
   * shows how many suborders are created. If the parameter ‘barcode’ is filled then this field can’t be used.
   * Possible values 1-20 if left empty then the default value is 1.
   *
   * @var int
   */
  protected $multiply;
  /**
   * Weight of the shipment, decimal in kg
   * @var float
   */
  protected $weight;
  /**
   * Possible values: XS, S, M, L, XL.
   * Mandatory if the parcel will be sent via APT using sender pin code
   *
   * @var string
   */
  protected $size;
  /**
   * Country from where the parcel is sent, possible values ee, lv, lt.
   * Mandatory.
   *
   * @var OrderCreateRequestSource
   */
  protected $source;
  /**
   * The protected $sender fields are needed only if the sender door code is required for the parcel sending
   * If the protected $sender fields are not needed, do not send in parameters.
   *
   * @var OrderCreateRequestSender
   */
  protected $sender;
  /**
   * @var OrderCreateRequestRecipient
   */
  protected $recipient;
  /**
   * For the protected $destination block. You can send parcels using 3 different configurations:
   * When sending a parcel to the parcel terminal, fill “place_id” as Parcel terminal ID.
   * When sending a parcel to an address, fill “place_id” = 1
   * When sending a parcel to the post office, fill “PostalCode”, “RoutingCode”, and “Country or place_id” as Parcel
   * terminal ID.
   * When sending a parcel using a courier service, fill “Street”, “House”, “Apartment”, “City”, and “Country”
   * When the whole address is sent in “Street” field then the house number and/or apartment number are separated into
   * specific fields “House” and “Apartment” if those are empty. When “House” and/or “Apartment” fields are not empty
   * then the value of those fields will be added to the database, regardless of the value on “Street” field.
   *
   * @var OrderCreateRequestDestination
   */
  protected $destination;
  /**
   * @var int
   */
  protected $customer_return_days;
  /**
   * @var OrderCreateRequestReturn
   */
  protected $return;
  /**
   * @var OrderCreateRequestAdditionalServices
   */
  protected $additionalservices;

  /**
   * @return string
   */
  public function getBarcode(): ?string
  {
    return $this->barcode;
  }

  /**
   * @param ?string $barcode
   * @return $this
   */
  public function setBarcode(?string $barcode): self
  {
    $this->barcode = $barcode;
    return $this;
  }

  /**
   * @return string
   */
  public function getReference(): ?string
  {
    return $this->reference;
  }

  /**
   * @param ?string $reference
   * @return $this
   */
  public function setReference(?string $reference): self
  {
    $this->reference = $reference;
    return $this;
  }

  /**
   * @return string
   */
  public function getContent(): ?string
  {
    return $this->content;
  }

  /**
   * @param ?string $content
   * @return $this
   */
  public function setContent(?string $content): self
  {
    $this->content = $content;
    return $this;
  }

  /**
   * @return ?int
   */
  public function getMultiply(): ?int
  {
    return $this->multiply;
  }

  /**
   * @param ?int $multiply
   * @return $this
   */
  public function setMultiply(?int $multiply): self
  {
    $this->multiply = $multiply;
    return $this;
  }

  /**
   * @return ?float
   */
  public function getWeight(): ?float
  {
    return $this->weight;
  }

  /**
   * @param ?float $weight
   * @return $this
   */
  public function setWeight(?float $weight): self
  {
    $this->weight = $weight;
    return $this;
  }

  /**
   * @return ?string
   */
  public function getSize(): ?string
  {
    return $this->size;
  }

  /**
   * @param ?string $size
   * @return $this
   */
  public function setSize(?string $size): self
  {
    $this->size = $size;
    return $this;
  }

  /**
   * @return OrderCreateRequestSource
   */
  public function getSource(): ?OrderCreateRequestSource
  {
    return $this->source;
  }

  /**
   * @param ?OrderCreateRequestSource $source
   * @return $this
   */
  public function setSource(?OrderCreateRequestSource $source): self
  {
    $this->source = $source;
    return $this;
  }

  /**
   * @return OrderCreateRequestSender
   */
  public function getSender(): ?OrderCreateRequestSender
  {
    return $this->sender;
  }

  /**
   * @param ?OrderCreateRequestSender $sender
   * @return $this
   */
  public function setSender(?OrderCreateRequestSender $sender): self
  {
    $this->sender = $sender;
    return $this;
  }

  /**
   * @return OrderCreateRequestRecipient
   */
  public function getRecipient(): ?OrderCreateRequestRecipient
  {
    return $this->recipient;
  }

  /**
   * @param ?OrderCreateRequestRecipient $recipient
   * @return $this
   */
  public function setRecipient(?OrderCreateRequestRecipient $recipient): self
  {
    $this->recipient = $recipient;
    return $this;
  }

  /**
   * @return ?OrderCreateRequestDestination
   */
  public function getDestination(): ?OrderCreateRequestDestination
  {
    return $this->destination;
  }

  /**
   * @param ?OrderCreateRequestDestination $destination
   * @return $this
   */
  public function setDestination(?OrderCreateRequestDestination $destination): self
  {
    $this->destination = $destination;
    return $this;
  }

  /**
   * @return ?int
   */
  public function getCustomerReturndays(): ?int
  {
    return $this->customer_return_days;
  }

  /**
   * @param ?int $customer_return_days
   * @return $this
   */
  public function setCustomerReturndays(?int $customer_return_days): self
  {
    $this->customer_return_days = $customer_return_days;
    return $this;
  }

  /**
   * @return ?OrderCreateRequestReturn
   */
  public function getReturn(): ?OrderCreateRequestReturn
  {
    return $this->return;
  }

  /**
   * @param ?OrderCreateRequestReturn $return
   * @return $this
   */
  public function setReturn(?OrderCreateRequestReturn $return): self
  {
    $this->return = $return;
    return $this;
  }

  /**
   * @return OrderCreateRequestAdditionalServices
   */
  public function getAdditionalservices(): ?OrderCreateRequestAdditionalServices
  {
    return $this->additionalservices;
  }

  /**
   * @param ?OrderCreateRequestAdditionalServices $additionalservices
   * @return $this
   */
  public function setAdditionalservices(?OrderCreateRequestAdditionalServices $additionalservices): self
  {
    $this->additionalservices = $additionalservices;
    return $this;
  }
}
