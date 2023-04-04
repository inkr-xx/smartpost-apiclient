<?php

namespace inkr\SmartPost\Model\CodPayment;

class CodPaymentResponse
{
  /**
   * Payment amount
   *
   * @var float
   */
  private $amount;
  /**
   * Shipments barcode
   *
   * @var string
   */
  private $barcode;
  /**
   * Recipient Name
   *
   * @var string
   */
  private $name;
  /**
   * Paid at date
   *
   * @var string
   */
  private $paymentDate;
  /**
   * Reference Number
   *
   * @var string
   */
  private $ref;
  /**
   * Payment Transfer Date
   *
   * @var string
   */
  private $tCbanktrans;

  /**
   * @return float
   */
  public function getAmount(): ?float
  {
    return $this->amount;
  }

  /**
   * @param float $amount
   * @return $this
   */
  public function setAmount(float $amount): self
  {
    $this->amount = $amount;
    return $this;
  }

  /**
   * @return string
   */
  public function getBarcode(): ?string
  {
    return $this->barcode;
  }

  /**
   * @param string $barcode
   * @return $this
   */
  public function setBarcode(string $barcode): self
  {
    $this->barcode = $barcode;
    return $this;
  }

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
  public function getPaymentDate(): ?string
  {
    return $this->paymentDate;
  }

  /**
   * @param string $paymentDate
   * @return $this
   */
  public function setPaymentDate(string $paymentDate): self
  {
    $this->paymentDate = $paymentDate;
    return $this;
  }

  /**
   * @return string
   */
  public function getRef(): ?string
  {
    return $this->ref;
  }

  /**
   * @param string $ref
   * @return $this
   */
  public function setRef(string $ref): self
  {
    $this->ref = $ref;
    return $this;
  }

  /**
   * @return string
   */
  public function getTCbanktrans(): ?string
  {
    return $this->tCbanktrans;
  }

  /**
   * @param string $tCbanktrans
   * @return $this
   */
  public function setTCbanktrans(string $tCbanktrans): self
  {
    $this->tCbanktrans = $tCbanktrans;
    return $this;
  }

}
