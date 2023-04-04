<?php

namespace inkr\SmartPost\Model;

use stdClass;

abstract class RequestAbstraction
{
  /**
   * Get minimized values for request body
   *
   * @return stdClass
   */
  public function getValues(): stdClass
  {
    $res = [];
    foreach (get_object_vars($this) as $attrib => $value)
    {
      if (!is_null($value))
      {
        if ($value instanceof self)
        {
          $value = $value->getValues();
        }
        $res[$attrib] = $value;
      }
    }
    return (object) $res;
  }
}
