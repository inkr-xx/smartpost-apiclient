<?php

namespace inkr\SmartPost\Model\Order;

use inkr\SmartPost\Model\RequestAbstraction;

class OrderCreateRequestRecipient extends RequestAbstraction
{
  /**
   * Recipient’s name
   *
   * @var string
   */
  protected $name;
  /**
   * Recipient’s phone number
   *
   * @var string
   */
  protected $phone;
  /**
   * Recipients e-mail address
   *
   * @var string
   */
  protected $email;
  /**
   * Amount of money for goods (this is COD amount that will be transferred to the parcel Sender)
   * Goods, transport - only one of these values can be filled
   *
   * @var float
   */
  protected $goods;
  /**
   * Amount of money for transport (this is Itella net sales and will not be transferred to parcel sender)
   * Goods, transport - only one of these values can be filled
   *
   * @var float
   */
  protected $transport;
  /**
   * ID code of the recipient; needed if ID validation is required.
   *
   * @var string
   */
  protected $idcode;

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
  public function getGoods(): ?float
  {
    return $this->goods;
  }

  /**
   * @param float $goods
   * @return $this
   */
  public function setGoods(float $goods): self
  {
    $this->goods = $goods;
    return $this;
  }

  /**
   * @return float
   */
  public function getTransport(): ?float
  {
    return $this->transport;
  }

  /**
   * @param float $transport
   * @return $this
   */
  public function setTransport(float $transport): self
  {
    $this->transport = $transport;
    return $this;
  }

  /**
   * @return string
   */
  public function getIdcode(): ?string
  {
    return $this->idcode;
  }

  /**
   * @param string $idcode
   * @return $this
   */
  public function setIdcode(string $idcode): self
  {
    $this->idcode = $idcode;
    return $this;
  }

}
