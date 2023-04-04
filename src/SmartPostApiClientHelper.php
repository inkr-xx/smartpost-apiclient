<?php

namespace inkr\SmartPost;

class SmartPostApiClientHelper
{
  public static function buildUrl(string $query, array $params)
  {
    $queryParams = [];
    foreach ($params as $key => $value)
    {
      if (is_array($value))
      {
        foreach ($value as $v)
        {
          $queryParams[] = sprintf('%s=%s', $key, urlencode($v));
        }
      }
      else
      {
        $queryParams[] = sprintf('%s=%s', $key, urlencode($value));
      }
    }
    return $query . ($queryParams ? '?' . implode('&', $queryParams) : '');
  }

  public static function toDate(?string $value): ?string
  {
    return $value ? date('Y-m-d H:i:sO', $value) : null;
  }
}
