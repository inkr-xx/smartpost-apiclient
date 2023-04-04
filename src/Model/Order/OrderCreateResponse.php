<?php

namespace inkr\SmartPost\Model\Order;

class OrderCreateResponse
{
  /**
   * Shipments barcode
   *
   * @var string
   */
  private $barcode;
  /**
   * Customer’s reference number
   *
   * @var string
   */
  private $reference;
  /**
   * Sender door code
   *
   * @var string
   */
  private $senderDoorcode;

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
  public function getSenderDoorcode(): ?string
  {
    return $this->senderDoorcode;
  }

  /**
   * @param ?string $senderDoorcode
   * @return $this
   */
  public function setSenderDoorcode(?string $senderDoorcode): self
  {
    $this->senderDoorcode = $senderDoorcode;
    return $this;
  }
}
