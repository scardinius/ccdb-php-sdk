<?php

namespace Scardinius\CcdbPhpSdk\Model;

class Card
{
  /** @var string Card number without spaces and including letters */
  private $cardNumber = '';

  /** @var string Type of the card (‘ISIC’, ‘ITIC’, ‘IYTC’, ‘SCHOLAR’) */
  private $cardType = '';

  /** @var string Status of the card. Must be VALID (for valid cards) or VOIDED (for cancelled cards) */
  private $cardStatus = '';

  /** @var string Part number of the card design */
  private $partNumber = '';

  /** @var string Cardholder's name as it appears on the card */
  private $printedName = '';

  /** @var string Cardholder's first name(s) */
  private $firstName = '';

  /** @var string Cardholder's last name */
  private $lastName = '';

  /** @var string Cardholder’s date of birth (YYYY-MM-DD) */
  private $dateOfBirth = '';

  /** @var string Cardholder's gender. (‘M’, ‘F’ or ‘O’) */
  private $gender = '';

  /** @var string Start of the card validity period. (YYYY-MM-DD) */
  private $validFrom = '';

  /** @var string End of the card validity period. (YYYY-MM-DD) */
  private $validTo = '';

  /** @var string Name of the institution the cardholder studies or teaches at (only for ISIC, ITIC and SCHOLAR) */
  private $institutionName = '';

  /** @var string Name of the card issuing organization */
  private $issuedBy = '';

  /** @var string Exactly when the card was given to the cardholder or issued in the system, including time zone offset */
  private $issuedOn = '';

  /** @var string E-mail address of the cardholder */
  private $email = '';

  /** @var string How the card is issued (‘PLASTIC_CARD’ or ‘VIRTUAL_CARD’) */
  private $issueType = '';

  /** @var array  */
  private $chips = [];

  /** @var array  */
  private $customValues = [];

}