<?php

namespace inkr\SmartPost\Model\OrderTracking;

class OrderTrackingResponse
{
  /**
   * Barcode
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
   * Parcel size (XS,S,M,L,XL,XXL)
   *
   * @var string
   */
  private $size;
  /**
   * Timestamp
   *
   * @var string
   */
  private $generated;
  /**
   * Timestamp when parcel is inserted to the parcel terminal
   *
   * @var string
   */
  private $sourceIn;
  /**
   * Timestamp when parcel is taken out from the parcel terminal
   *
   * @var string
   */
  private $sourceOut;
  /**
   * Timestamp when parcel has been registered in sorting terminal
   *
   * @var string
   */
  private $termIn;
  /**
   * Timestamp when parcel has been sorted in sorting terminal and is ready to be delivered to destination
   *
   * @var string
   */
  private $termOut;
  /**
   * Timestamp when parcel has been delivered to destination parcel terminal
   *
   * @var string
   */
  private $destinationIn;
  /**
   * Timestamp when parcel is taken out from destination parcel terminal or  delivered to destination
   *
   * @var string
   */
  private $destinationOut;
  /**
   * Timestamp when parcel is inserted to the parcel terminal for return
   *
   * @var string
   */
  private $returnIn;
  /**
   * Timestamp when return parcel is taken out from the parcel terminal
   *
   * @var string
   */
  private $returnOut;
  /**
   * Timestamp when returning parcel has been registered in sorting terminal
   *
   * @var string
   */
  private $returnTermIn;
  /**
   * Timestamp when return parcel has been sorted in sorting terminal and is ready to be sent to sender
   *
   * @var string
   */
  private $returnTermOut;

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
   * @param string $reference
   * @return $this
   */
  public function setReference(string $reference): self
  {
    $this->reference = $reference;
    return $this;
  }

  /**
   * @return string
   */
  public function getGenerated(): ?string
  {
    return $this->generated;
  }

  /**
   * @param ?string $generated
   * @return $this
   */
  public function setGenerated(?string $generated): self
  {
    $this->generated = $generated;
    return $this;
  }

  /**
   * @return string
   */
  public function getSize(): ?string
  {
    return $this->size;
  }

  /**
   * @param string $size
   * @return $this
   */
  public function setSize(string $size): self
  {
    $this->size = $size;
    return $this;
  }

  /**
   * @return string
   */
  public function getSourceIn(): ?string
  {
    return $this->sourceIn;
  }

  /**
   * @param ?string $sourceIn
   * @return $this
   */
  public function setSourceIn(?string $sourceIn): self
  {
    $this->sourceIn = $sourceIn;
    return $this;
  }

  /**
   * @return string
   */
  public function getSourceOut(): ?string
  {
    return $this->sourceOut;
  }

  /**
   * @param ?string $sourceOut
   * @return $this
   */
  public function setSourceOut(?string $sourceOut): self
  {
    $this->sourceOut = $sourceOut;
    return $this;
  }

  /**
   * @return string
   */
  public function getTermIn(): ?string
  {
    return $this->termIn;
  }

  /**
   * @param ?string $termIn
   * @return $this
   */
  public function setTermIn(?string $termIn): self
  {
    $this->termIn = $termIn;
    return $this;
  }

  /**
   * @return string
   */
  public function getTermOut(): ?string
  {
    return $this->termOut;
  }

  /**
   * @param ?string $termOut
   * @return $this
   */
  public function setTermOut(?string $termOut): self
  {
    $this->termOut = $termOut;
    return $this;
  }

  /**
   * @return string
   */
  public function getDestinationIn(): ?string
  {
    return $this->destinationIn;
  }

  /**
   * @param ?string $destinationIn
   * @return $this
   */
  public function setDestinationIn(?string $destinationIn): self
  {
    $this->destinationIn = $destinationIn;
    return $this;
  }

  /**
   * @return string
   */
  public function getDestinationOut(): ?string
  {
    return $this->destinationOut;
  }

  /**
   * @param ?string $destinationOut
   * @return $this
   */
  public function setDestinationOut(?string $destinationOut): self
  {
    $this->destinationOut = $destinationOut;
    return $this;
  }

  /**
   * @return string
   */
  public function getReturnIn(): ?string
  {
    return $this->returnIn;
  }

  /**
   * @param ?string $returnIn
   * @return $this
   */
  public function setReturnIn(?string $returnIn): self
  {
    $this->returnIn = $returnIn;
    return $this;
  }

  /**
   * @return string
   */
  public function getReturnOut(): ?string
  {
    return $this->returnOut;
  }

  /**
   * @param ?string $returnOut
   * @return $this
   */
  public function setReturnOut(?string $returnOut): self
  {
    $this->returnOut = $returnOut;
    return $this;
  }

  /**
   * @return string
   */
  public function getReturnTermIn(): ?string
  {
    return $this->returnTermIn;
  }

  /**
   * @param ?string $returnTermIn
   * @return $this
   */
  public function setReturnTermIn(?string $returnTermIn): self
  {
    $this->returnTermIn = $returnTermIn;
    return $this;
  }

  /**
   * @return string
   */
  public function getReturnTermOut(): ?string
  {
    return $this->returnTermOut;
  }

  /**
   * @param ?string $returnTermOut
   * @return $this
   */
  public function setReturnTermOut(?string $returnTermOut): self
  {
    $this->returnTermOut = $returnTermOut;
    return $this;
  }

}
