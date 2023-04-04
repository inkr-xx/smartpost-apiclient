<?php

namespace inkr\SmartPost\Model\Order;

use inkr\SmartPost\Model\RequestAbstraction;

class OrderCreateRequestSource extends RequestAbstraction
{
  /**
   * Country from where the parcel is sent, possible values ee, lv, lt
   *
   * @var string
   */
  protected $country;

  /**
   * @return string
   */
  public function getCountry(): ?string
  {
    return $this->country;
  }

  /**
   * @param string $country
   * @return $this
   */
  public function setCountry(string $country): self
  {
    $this->country = $country;
    return $this;
  }
}
