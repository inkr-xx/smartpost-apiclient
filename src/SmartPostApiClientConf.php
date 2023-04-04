<?php

namespace inkr\SmartPost;


class SmartPostApiClientConf
{
  const API_URL = 'https://gateway.posti.fi/smartpost/api/ext/v1/';

  /**
   * @var string
   */
  private $authKey;
  /**
   * @var string
   */
  private $gatewaySecret;
  /**
   * @var string
   */
  private $apiUrl;

  /**
   * @return string
   */
  public function getAuthKey(): ?string
  {
    return $this->authKey;
  }

  /**
   * @param ?string $authKey
   * @return $this
   */
  public function setAuthKey(?string $authKey): self
  {
    $this->authKey = $authKey;
    return $this;
  }

  /**
   * @return string
   */
  public function getGatewaySecret(): ?string
  {
    return $this->gatewaySecret;
  }

  /**
   * @param ?string $gatewaySecret
   * @return $this
   */
  public function setGatewaySecret(?string $gatewaySecret): self
  {
    $this->gatewaySecret = $gatewaySecret;
    return $this;
  }

  /**
   * @return string
   */
  public function getApiUrl(): string
  {
    return $this->apiUrl ?? self::API_URL;
  }

  /**
   * @param string $apiUrl
   * @return $this
   */
  public function setApiUrl(string $apiUrl): self
  {
    $this->apiUrl = $apiUrl;
    return $this;
  }
}
