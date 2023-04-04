<?php

namespace inkr\SmartPost\Model\Exception;

use Exception;

class SmartPostApiClientException extends Exception
{
  public function __construct(string $message = null, $code = null)
  {
    parent::__construct($message ?: 'API exception', $code ?? 400);
  }
}
