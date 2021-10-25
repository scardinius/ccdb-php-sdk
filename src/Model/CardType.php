<?php

namespace Scardinius\CcdbPhpSdk\Model;

final class CardType
{
  public const ISIC = 'ISIC';
  public const ITIC = 'ITIC';
  public const IYTC = 'IYTC';
  public const SCHOLAR = 'SCHOLAR';

  private static $options = [
    self::ISIC,
    self::ITIC,
    self::IYTC,
    self::SCHOLAR,
  ];

  public static function isValid(string $value): bool {
    return in_array($value, self::$options);
  }

}
