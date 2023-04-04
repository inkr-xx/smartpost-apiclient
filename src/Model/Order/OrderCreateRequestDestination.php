<?php

namespace inkr\SmartPost\Model\Order;

use inkr\SmartPost\Model\RequestAbstraction;

class OrderCreateRequestDestination extends RequestAbstraction
{
  /**
   * Parcel terminal ID. If the value is added > 1 then address values (postalcode, routingcode, street, house,
   * apartment, city, country) can’t be filled
   *
   * @var string
   */
  protected $place_id;
  /**
   * Destination postal code
   *
   * @var string
   */
  protected $postalcode;
  /**
   * Destination routing code. The rountingcode can only be filled if country is ‘fi’ then the values postalcode,
   * routingcode, country are required and place_id has to be empty.
   *
   * @var string
   */
  protected $routingcode;
  /**
   * Destination street
   *
   * @var string
   */
  protected $street;
  /**
   * Destination house number
   *
   * @var string
   */
  protected $house;
  /**
   * Destination apartment
   *
   * @var string
   */
  protected $apartment;
  /**
   * Destination city
   *
   * @var string
   */
  protected $city;
  /**
   * Destination country
   *
   * @var string
   */
  protected $country;
  /**
   * Extra details about the destination (e.g. third floor)
   *
   * @var string
   */
  protected $details;
  /**
   * When will the recipient be available for a courier to pick up:
   * 1 = Any time
   * 2 = 09:00 – 17:00
   * 3 = 17:00 – 21:00
   * Default:1
   *
   * @var int
   */
  protected $timewindow;

  /**
   * @return string
   */
  public function getPlaceId(): ?string
  {
    return $this->place_id;
  }

  /**
   * @param ?string $place_id
   * @return $this
   */
  public function setPlaceId(?string $place_id): self
  {
    $this->place_id = $place_id;
    return $this;
  }

  /**
   * @return string
   */
  public function getPostalcode(): ?string
  {
    return $this->postalcode;
  }

  /**
   * @param ?string $postalcode
   * @return $this
   */
  public function setPostalcode(?string $postalcode): self
  {
    $this->postalcode = $postalcode;
    return $this;
  }

  /**
   * @return string
   */
  public function getRoutingcode(): ?string
  {
    return $this->routingcode;
  }

  /**
   * @param ?string $routingcode
   * @return $this
   */
  public function setRoutingcode(?string $routingcode): self
  {
    $this->routingcode = $routingcode;
    return $this;
  }

  /**
   * @return string
   */
  public function getStreet(): ?string
  {
    return $this->street;
  }

  /**
   * @param ?string $street
   * @return $this
   */
  public function setStreet(?string $street): self
  {
    $this->street = $street;
    return $this;
  }

  /**
   * @return string
   */
  public function getHouse(): ?string
  {
    return $this->house;
  }

  /**
   * @param ?string $house
   * @return $this
   */
  public function setHouse(?string $house): self
  {
    $this->house = $house;
    return $this;
  }

  /**
   * @return string
   */
  public function getApartment(): ?string
  {
    return $this->apartment;
  }

  /**
   * @param ?string $apartment
   * @return $this
   */
  public function setApartment(?string $apartment): self
  {
    $this->apartment = $apartment;
    return $this;
  }

  /**
   * @return string
   */
  public function getCity(): ?string
  {
    return $this->city;
  }

  /**
   * @param ?string $city
   * @return $this
   */
  public function setCity(?string $city): self
  {
    $this->city = $city;
    return $this;
  }

  /**
   * @return string
   */
  public function getCountry(): ?string
  {
    return $this->country;
  }

  /**
   * @param ?string $country
   * @return $this
   */
  public function setCountry(?string $country): self
  {
    $this->country = $country;
    return $this;
  }

  /**
   * @return string
   */
  public function getDetails(): ?string
  {
    return $this->details;
  }

  /**
   * @param ?string $details
   * @return $this
   */
  public function setDetails(?string $details): self
  {
    $this->details = $details;
    return $this;
  }

  /**
   * @return int
   */
  public function getTimewindow(): ?int
  {
    return $this->timewindow;
  }

  /**
   * @param ?int $timewindow
   * @return $this
   */
  public function setTimewindow(?int $timewindow): self
  {
    $this->timewindow = $timewindow;
    return $this;
  }
}
