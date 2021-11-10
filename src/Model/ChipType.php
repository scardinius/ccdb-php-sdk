<?php

namespace Scardinius\CcdbPhpSdk\Model;

final class ChipType
{
  public const MIFARE = 'MIFARE';
  public const EM_MARINE = 'EM_MARINE';

  public static $options = [
    self::MIFARE,
    self::EM_MARINE,
  ];

  /**
   * @param string $value
   * @return bool
   */
  public static function isValid(string $value): bool
  {
    return in_array($value, self::$options);
  }

}
