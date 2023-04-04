<?php

namespace inkr\SmartPost\Model\Order;

use inkr\SmartPost\Model\RequestAbstraction;

class OrderCreateRequestReturn extends RequestAbstraction
{
  /**
   * Value how many days the customer is able to return order. If customer return is not allowed, insert 0.
   * Possible values: 0-90
   *
   * @var int
   */
  protected $customerReturnDays = 0;
  /**
   * Parcel terminal ID. If return to address instead of parcel terminal, then insert 1. If the value is added > 1 then
   * address values (postalcode, routingcode, street, house, apartment, city, country) can’t be filled
   *
   * @var string
   */
  protected $place_id;
  /**
   * Postal code
   *
   * @var string
   */
  protected $postalcode;
  /**
   * Routing code
   *
   * @var string
   */
  protected $routingcode;
  /**
   * Street
   *
   * @var string
   */
  protected $street;
  /**
   * House Number
   *
   * @var string
   */
  protected $house;
  /**
   * Apartment
   *
   * @var string
   */
  protected $apartment;
  /**
   * City
   *
   * @var string
   */
  protected $city;
  /**
   * Country
   *
   * @var string
   */
  protected $country;
  /**
   * Hour from when return values 0-23. Required if return_hour_until is filled.
   *
   * @var int
   */
  protected $return_hour_from;
  /**
   * Hour to when return values 0-23. Required if return_hour_from is filled.
   *
   * @var int
   */
  protected $return_hour_until;
  /**
   * Example [1,2], possible values 1 to 7
   * @var int
   */
  protected $return_weekdays;
  /**
   * Extra Return info for courier
   *
   * @var string
   */
  protected $return_info;
  /**
   * Return name
   *
   * @var string
   */
  protected $name;
  /**
   * Return Phone number
   *
   * @var string
   */
  protected $phone;
  /**
   * Return email
   *
   * @var string
   */
  protected $email;

  /**
   * @return int
   */
  public function getCustomerReturnDays(): ?int
  {
    return $this->customerReturnDays;
  }

  /**
   * @param ?int $customerReturnDays
   * @return $this
   */
  public function setCustomerReturnDays(?int $customerReturnDays): self
  {
    $this->customerReturnDays = $customerReturnDays;
    return $this;
  }

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
   * @return int
   */
  public function getReturnHourFrom(): ?int
  {
    return $this->return_hour_from;
  }

  /**
   * @param ?int $return_hour_from
   * @return $this
   */
  public function setReturnHourFrom(?int $return_hour_from): self
  {
    $this->return_hour_from = $return_hour_from;
    return $this;
  }

  /**
   * @return int
   */
  public function getReturnHourUntil(): ?int
  {
    return $this->return_hour_until;
  }

  /**
   * @param ?int $return_hour_until
   * @return $this
   */
  public function setReturnHourUntil(?int $return_hour_until): self
  {
    $this->return_hour_until = $return_hour_until;
    return $this;
  }

  /**
   * @return int
   */
  public function getReturnWeekdays(): ?int
  {
    return $this->return_weekdays;
  }

  /**
   * @param ?int $return_weekdays
   * @return $this
   */
  public function setReturnWeekdays(?int $return_weekdays): self
  {
    $this->return_weekdays = $return_weekdays;
    return $this;
  }

  /**
   * @return string
   */
  public function getReturninfo(): ?string
  {
    return $this->return_info;
  }

  /**
   * @param ?string $return_info
   * @return $this
   */
  public function setReturninfo(?string $return_info): self
  {
    $this->return_info = $return_info;
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
   * @param ?string $name
   * @return $this
   */
  public function setName(?string $name): self
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
   * @param ?string $phone
   * @return $this
   */
  public function setPhone(?string $phone): self
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
   * @param ?string $email
   * @return $this
   */
  public function setEmail(?string $email): self
  {
    $this->email = $email;
    return $this;
  }

}
