<?php

namespace Scardinius\CcdbPhpSdk\Model;

final class Gender
{
  public const FEMALE = 'F';
  public const MALE = 'M';
  public const OTHER = 'O';

  private static $options = [
    self::FEMALE,
    self::MALE,
    self::OTHER,
  ];

  public static function isValid(string $value): bool {
    return in_array($value, self::$options);
  }

}
