<?php

namespace Scardinius\CcdbPhpSdk\Model;

final class IssueType
{
  public const PLASTIC_CARD = 'PLASTIC_CARD';
  public const VIRTUAL_CARD = 'VIRTUAL_CARD';

  private static $options = [
    self::PLASTIC_CARD,
    self::VIRTUAL_CARD,
  ];

  public static function isValid(string $value): bool {
    return in_array($value, self::$options);
  }

}
