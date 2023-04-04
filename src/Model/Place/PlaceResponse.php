<?php

namespace inkr\SmartPost\Model\Place;

class PlaceResponse
{
  /**
   * Parcel terminal ID String
   *
   * @var string
   */
  private $placeId;
  /**
   * Destination name
   *
   * @var string
   */
  private $name;
  /**
   * Destination city
   *
   * @var string
   */
  private $city;
  /**
   * Destination address
   *
   * @var string
   */
  private $address;
  /**
   * Destination country code
   *
   * @var string
   */
  private $country;
  /**
   * Destination postal code (zip code)
   *
   * @var string
   */
  private $postalcode;
  /**
   * Destination routing code
   *
   * @var string
   */
  private $routingcode;
  /**
   * Time frame when location is open
   *
   * @var string
   */
  private $availability;
  /**
   * A short description of the location
   *
   * @var string
   */
  private $description;
  /**
   * Place type
   *
   * @var string
   */
  private $type;
  /**
   * Latitude
   *
   * @var float
   */
  private $lat;
  /**
   * Longitude
   *
   * @var float
   */
  private $lng;
  /**
   * @var int
   */
  private $groupId;
  /**
   * @var string
   */
  private $groupName;
  /**
   * @var int
   */
  private $groupSort;
  /**
   * @var string
   */
  private $createDate;
  /**
   * @var string
   */
  private $updateDate;

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
  public function getCity(): ?string
  {
    return $this->city;
  }

  /**
   * @param string $city
   * @return $this
   */
  public function setCity(string $city): self
  {
    $this->city = $city;
    return $this;
  }

  /**
   * @return string
   */
  public function getAddress(): ?string
  {
    return $this->address;
  }

  /**
   * @param string $address
   * @return $this
   */
  public function setAddress(string $address): self
  {
    $this->address = $address;
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
   * @param string $country
   * @return $this
   */
  public function setCountry(string $country): self
  {
    $this->country = $country;
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
   * @param string $postalcode
   * @return $this
   */
  public function setPostalcode(string $postalcode): self
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
   * @param string $routingcode
   * @return $this
   */
  public function setRoutingcode(string $routingcode): self
  {
    $this->routingcode = $routingcode;
    return $this;
  }

  /**
   * @return string
   */
  public function getAvailability(): ?string
  {
    return $this->availability;
  }

  /**
   * @param string $availability
   * @return $this
   */
  public function setAvailability(string $availability): self
  {
    $this->availability = $availability;
    return $this;
  }

  /**
   * @return string
   */
  public function getDescription(): ?string
  {
    return $this->description;
  }

  /**
   * @param string $description
   * @return $this
   */
  public function setDescription(string $description): self
  {
    $this->description = $description;
    return $this;
  }

  /**
   * @return string
   */
  public function getType(): ?string
  {
    return $this->type;
  }

  /**
   * @param string $type
   * @return $this
   */
  public function setType(string $type): self
  {
    $this->type = $type;
    return $this;
  }

  /**
   * @return float
   */
  public function getLat(): ?float
  {
    return $this->lat;
  }

  /**
   * @param ?float $lat
   * @return $this
   */
  public function setLat(?float $lat): self
  {
    $this->lat = $lat;
    return $this;
  }

  /**
   * @return float
   */
  public function getLng(): ?float
  {
    return $this->lng;
  }

  /**
   * @param ?float $lng
   * @return $this
   */
  public function setLng(?float $lng): self
  {
    $this->lng = $lng;
    return $this;
  }

  /**
   * @return int
   */
  public function getGroupId(): ?int
  {
    return $this->groupId;
  }

  /**
   * @param int $groupId
   * @return $this
   */
  public function setGroupId(int $groupId): self
  {
    $this->groupId = $groupId;
    return $this;
  }

  /**
   * @return string
   */
  public function getGroupName(): ?string
  {
    return $this->groupName;
  }

  /**
   * @param string $groupName
   * @return $this
   */
  public function setGroupName(string $groupName): self
  {
    $this->groupName = $groupName;
    return $this;
  }

  /**
   * @return int
   */
  public function getGroupSort(): ?int
  {
    return $this->groupSort;
  }

  /**
   * @param int $groupSort
   * @return $this
   */
  public function setGroupSort(int $groupSort): self
  {
    $this->groupSort = $groupSort;
    return $this;
  }

  /**
   * @return string
   */
  public function getCreateDate(): ?string
  {
    return $this->createDate;
  }

  /**
   * @param string $createDate
   * @return $this
   */
  public function setCreateDate(string $createDate): self
  {
    $this->createDate = $createDate;
    return $this;
  }

  /**
   * @return string
   */
  public function getUpdateDate(): ?string
  {
    return $this->updateDate;
  }

  /**
   * @param string $updateDate
   * @return $this
   */
  public function setUpdateDate(string $updateDate): self
  {
    $this->updateDate = $updateDate;
    return $this;
  }
}
