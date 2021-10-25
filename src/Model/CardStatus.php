<?php

namespace Scardinius\CcdbPhpSdk\Model;

final class CardStatus
{
  public const VALID = 'VALID';
  public const VOIDED = 'VOIDED';

  private static $options = [
    self::VALID,
    self::VOIDED,
  ];

  public static function isValid(string $value): bool {
    return in_array($value, self::$options);
  }

}
