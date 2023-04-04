<?php

namespace inkr\SmartPost\Model\CourierVisitTime;

class CourierVisitTimeResponse
{
  /**
   * Parcel terminal ID
   *
   * @var string
   */
  private $placeId;
  /**
   * Day number (1 = Monday)
   *
   * @var int
   */
  private $day;
  /**
   * Time 24h format
   *
   * @var string
   */
  private $in;
  /**
   * Time 24h format
   *
   * @var string
   */
  private $out;
  /**
   * Time 24h format
   *
   * @var string
   */
  private $expressIn;
  /**
   * Time 24h format
   *
   * @var string
   */
  private $expressOut;

  /**
   * @return string
   */
  public function getPlaceId(): ?string
  {
    return $this->placeId;
  }

  /**
   * @param string $placeId
   * @return $this
   */
  public function setPlaceId(string $placeId): self
  {
    $this->placeId = $placeId;
    return $this;
  }

  /**
   * @return int
   */
  public function getDay(): ?int
  {
    return $this->day;
  }

  /**
   * @param int $day
   * @return $this
   */
  public function setDay(int $day): self
  {
    $this->day = $day;
    return $this;
  }

  /**
   * @return string
   */
  public function getIn(): ?string
  {
    return $this->in;
  }

  /**
   * @param string $in
   * @return $this
   */
  public function setIn(string $in): self
  {
    $this->in = $in;
    return $this;
  }

  /**
   * @return string
   */
  public function getOut(): ?string
  {
    return $this->out;
  }

  /**
   * @param string $out
   * @return $this
   */
  public function setOut(string $out): self
  {
    $this->out = $out;
    return $this;
  }

  /**
   * @return string
   */
  public function getExpressIn(): ?string
  {
    return $this->expressIn;
  }

  /**
   * @param string $expressIn
   * @return $this
   */
  public function setExpressIn(string $expressIn): self
  {
    $this->expressIn = $expressIn;
    return $this;
  }

  /**
   * @return string
   */
  public function getExpressOut(): ?string
  {
    return $this->expressOut;
  }

  /**
   * @param string $expressOut
   * @return $this
   */
  public function setExpressOut(string $expressOut): self
  {
    $this->expressOut = $expressOut;
    return $this;
  }

}
