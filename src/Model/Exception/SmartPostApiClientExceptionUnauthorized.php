<?php

namespace inkr\SmartPost\Model\Exception;

use Exception;

class SmartPostApiClientExceptionUnauthorized extends Exception
{
  public function __construct(string $message = null)
  {
    parent::__construct($message ?: 'Unauthorized', 401);
  }
}
