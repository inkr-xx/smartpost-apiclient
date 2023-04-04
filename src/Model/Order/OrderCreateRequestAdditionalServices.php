<?php

namespace inkr\SmartPost\Model\Order;

use inkr\SmartPost\Model\RequestAbstraction;

class OrderCreateRequestAdditionalServices extends RequestAbstraction
{
  /**
   * Express service smartexpress additional service must be activated can be used only
   * if destination_place.is _express is allowed
   *
   * @var bool
   */
  protected $express = false;
  /**
   * Recipient identity check recipient_id_check additional service must be activated.
   * “IdCode” in recipient data must be filled
   *
   * @var bool
   */
  protected $idcheck = false;
  /**
   * Recipient age check recipient_age_check additional service must be activated.
   *
   * @var bool
   */
  protected $agecheck = false;
  /**
   * Delivery notification (sent to sender) e-mail Address
   * (If NotifyEmail is same as "recipient.email" raise exception)
   * Sender_email_notification additional service must be activated
   *
   * @var string
   */
  protected $notifyemail;
  /**
   * Delivery notification (sent to sender) phone (gsm) number.
   * (If NotifyPhone is same as "recipient.phone" raise exception)
   * sender_sms_notification additional service must be activated.
   *
   * @var string
   */
  protected $notifyphone;
  /**
   * For values true or 1 moves an order under active orders (label can be printed later).
   * Does not need activation in E-service.
   *
   * @var bool
   */
  protected $labelprinted = false;

  /**
   * @return bool
   */
  public function isExpress(): bool
  {
    return $this->express;
  }

  /**
   * @param bool $express
   * @return OrderCreateRequestAdditionalServices
   */
  public function setExpress(bool $express): OrderCreateRequestAdditionalServices
  {
    $this->express = $express;
    return $this;
  }

  /**
   * @return bool
   */
  public function isIdcheck(): bool
  {
    return $this->idcheck;
  }

  /**
   * @param bool $idcheck
   * @return OrderCreateRequestAdditionalServices
   */
  public function setIdcheck(bool $idcheck): OrderCreateRequestAdditionalServices
  {
    $this->idcheck = $idcheck;
    return $this;
  }

  /**
   * @return bool
   */
  public function isAgecheck(): bool
  {
    return $this->agecheck;
  }

  /**
   * @param bool $agecheck
   * @return OrderCreateRequestAdditionalServices
   */
  public function setAgecheck(bool $agecheck): OrderCreateRequestAdditionalServices
  {
    $this->agecheck = $agecheck;
    return $this;
  }

  /**
   * @return string
   */
  public function getNotifyemail(): ?string
  {
    return $this->notifyemail;
  }

  /**
   * @param ?string $notifyemail
   * @return OrderCreateRequestAdditionalServices
   */
  public function setNotifyemail(?string $notifyemail): OrderCreateRequestAdditionalServices
  {
    $this->notifyemail = $notifyemail;
    return $this;
  }

  /**
   * @return ?string
   */
  public function getNotifyphone(): ?string
  {
    return $this->notifyphone;
  }

  /**
   * @param ?string $notifyphone
   * @return OrderCreateRequestAdditionalServices
   */
  public function setNotifyphone(?string $notifyphone): OrderCreateRequestAdditionalServices
  {
    $this->notifyphone = $notifyphone;
    return $this;
  }

  /**
   * @return bool
   */
  public function isLabelprinted(): bool
  {
    return $this->labelprinted;
  }

  /**
   * @param bool $labelprinted
   * @return OrderCreateRequestAdditionalServices
   */
  public function setLabelprinted(bool $labelprinted): OrderCreateRequestAdditionalServices
  {
    $this->labelprinted = $labelprinted;
    return $this;
  }

}
