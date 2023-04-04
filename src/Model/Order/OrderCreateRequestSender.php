<?php

namespace inkr\SmartPost\Model\Order;

use inkr\SmartPost\Model\RequestAbstraction;

class OrderCreateRequestSender extends RequestAbstraction
{
  /**
   * Sender's name
   *
   * @var string
   */
  protected $name;
  /**
   * Sender's phone number
   *
   * @var string
   */
  protected $phone;
  /**
   * Sender's e-mail address
   *
   * @var string
   */
  protected $email;
  /**
   * Amount of money the sender must pay before sending the parcel.
   *
   * @var float
   */
  protected $cash;

  /**
   * @return string
   */
  public function getName(): ?string
  {
    return $this->name;
  }

  /**
   * @param string $name
   * @return $this
   */
  public function setName(string $name): self
  {
    $this->name = $name;
    return $this;
  }

  /**
   * @return string
   */
  public function getPhone(): ?string
  {
    return $this->phone;
  }

  /**
   * @param string $phone
   * @return $this
   */
  public function setPhone(string $phone): self
  {
    $this->phone = $phone;
    return $this;
  }

  /**
   * @return string
   */
  public function getEmail(): ?string
  {
    return $this->email;
  }

  /**
   * @param string $email
   * @return $this
   */
  public function setEmail(string $email): self
  {
    $this->email = $email;
    return $this;
  }

  /**
   * @return float
   */
  public function getCash(): ?float
  {
    return $this->cash;
  }

  /**
   * @param float $cash
   * @return $this
   */
  public function setCash(float $cash): self
  {
    $this->cash = $cash;
    return $this;
  }

}
