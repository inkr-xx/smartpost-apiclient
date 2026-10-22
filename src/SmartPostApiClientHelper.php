<?php

namespace inkr\SmartPost;

class SmartPostApiClientHelper
{
  public static function buildUrl(string $query, array $params): string
  {
    $queryParams = [];
    foreach ($params as $key => $value)
    {
      if (is_array($value))
      {
        foreach ($value as $v)
        {
          $queryParams[] = sprintf('%s=%s', $key, urlencode((string) $v));
        }
      }
      else
      {
        $queryParams[] = sprintf('%s=%s', $key, urlencode((string) $value));
      }
    }
    return $query . ($queryParams ? '?' . implode('&', $queryParams) : '');
  }

  public static function toDate(?string $value): ?string
  {
    if (!$value)
    {
      return null;
    }

    $timestamp = is_numeric($value) ? (int) $value : strtotime($value);
    if ($timestamp === false)
    {
      return null;
    }

    return date('Y-m-d H:i:sO', $timestamp);
  }
}
