<?php

namespace Scardinius\CcdbPhpSdk\Model;

use Exception;
use SimpleXMLElement;

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

  private $requiredProperties = [
    'cardNumber',
    'cardStatus',
    'printedName',
    'dateOfBirth',
    'validTo',
    'institutionName',
  ];

  private $printableProperties = [
    'cardNumber',
    'cardType',
    'cardStatus',
    'partNumber',
    'printedName',
    'firstName',
    'lastName',
    'dateOfBirth',
    'gender',
    'validFrom',
    'validTo',
    'institutionName',
    'issuedBy',
    'issuedOn',
    'email',
    'issueType',
  ];

  /**
   * @return string
   */
  public function getCardNumber(): string
  {
    return $this->cardNumber;
  }

  /**
   * @param string $cardNumber
   */
  public function setCardNumber(string $cardNumber): void
  {
    $this->cardNumber = $cardNumber;
  }

  /**
   * @return string
   */
  public function getCardType(): string
  {
    return $this->cardType;
  }

  /**
   * @param string $cardType
   */
  public function setCardType(string $cardType): void
  {
    $this->cardType = $cardType;
  }

  /**
   * @return string
   */
  public function getCardStatus(): string
  {
    return $this->cardStatus;
  }

  /**
   * @param string $cardStatus
   */
  public function setCardStatus(string $cardStatus): void
  {
    $this->cardStatus = $cardStatus;
  }

  /**
   * @return string
   */
  public function getPartNumber(): string
  {
    return $this->partNumber;
  }

  /**
   * @param string $partNumber
   */
  public function setPartNumber(string $partNumber): void
  {
    $this->partNumber = $partNumber;
  }

  /**
   * @return string
   */
  public function getPrintedName(): string
  {
    return $this->printedName;
  }

  /**
   * @param string $printedName
   */
  public function setPrintedName(string $printedName): void
  {
    $this->printedName = $printedName;
  }

  /**
   * @return string
   */
  public function getFirstName(): string
  {
    return $this->firstName;
  }

  /**
   * @param string $firstName
   */
  public function setFirstName(string $firstName): void
  {
    $this->firstName = $firstName;
  }

  /**
   * @return string
   */
  public function getLastName(): string
  {
    return $this->lastName;
  }

  /**
   * @param string $lastName
   */
  public function setLastName(string $lastName): void
  {
    $this->lastName = $lastName;
  }

  /**
   * @return string
   */
  public function getDateOfBirth(): string
  {
    return $this->dateOfBirth;
  }

  /**
   * @param string $dateOfBirth
   */
  public function setDateOfBirth(string $dateOfBirth): void
  {
    $this->dateOfBirth = $dateOfBirth;
  }

  /**
   * @return string
   */
  public function getGender(): string
  {
    return $this->gender;
  }

  /**
   * @param string $gender
   */
  public function setGender(string $gender): void
  {
    $this->gender = $gender;
  }

  /**
   * @return string
   */
  public function getValidFrom(): string
  {
    return $this->validFrom;
  }

  /**
   * @param string $validFrom
   */
  public function setValidFrom(string $validFrom): void
  {
    $this->validFrom = $validFrom;
  }

  /**
   * @return string
   */
  public function getValidTo(): string
  {
    return $this->validTo;
  }

  /**
   * @param string $validTo
   */
  public function setValidTo(string $validTo): void
  {
    $this->validTo = $validTo;
  }

  /**
   * @return string
   */
  public function getInstitutionName(): string
  {
    return $this->institutionName;
  }

  /**
   * @param string $institutionName
   */
  public function setInstitutionName(string $institutionName): void
  {
    $this->institutionName = $institutionName;
  }

  /**
   * @return string
   */
  public function getIssuedBy(): string
  {
    return $this->issuedBy;
  }

  /**
   * @param string $issuedBy
   */
  public function setIssuedBy(string $issuedBy): void
  {
    $this->issuedBy = $issuedBy;
  }

  /**
   * @return string
   */
  public function getIssuedOn(): string
  {
    return $this->issuedOn;
  }

  /**
   * @param string $issuedOn
   */
  public function setIssuedOn(string $issuedOn): void
  {
    $this->issuedOn = $issuedOn;
  }

  /**
   * @return string
   */
  public function getEmail(): string
  {
    return $this->email;
  }

  /**
   * @param string $email
   */
  public function setEmail(string $email): void
  {
    $this->email = $email;
  }

  /**
   * @return string
   */
  public function getIssueType(): string
  {
    return $this->issueType;
  }

  /**
   * @param string $issueType
   */
  public function setIssueType(string $issueType): void
  {
    $this->issueType = $issueType;
  }

  /**
   * @return array
   */
  public function getCustomValues(): array
  {
    return $this->customValues;
  }

  /**
   * @param array $customValues
   */
  public function setCustomValues(array $customValues): void
  {
    $this->customValues = $customValues;
  }

  /**
   * @param array $values
   * @return Card
   */
  public function load(array $values): Card
  {
    foreach ($values as $property => $value) {
      if (property_exists($this, $property)) {
        $functionName = 'set' . ucfirst($property);
        if (is_callable($functionName, true)) {
          $this->$functionName($value);
        }
      }
    }

    return $this;
  }

  /**
   * @throws Exception
   */
  private function checkRequiredProperties(): void
  {
    $missing = [];
    foreach ($this->requiredProperties as $property)
    {
      if (!$this->$property) {
        $missing[] = $property;
      }
    }
    if ($missing) {
      $message = sprintf('Missing required properties: %s', implode(', ', $missing));
      throw new Exception($message);
    }
  }

  /**
   * @return string
   * @throws Exception
   */
  public function prepareXml(): string
  {
    $this->checkRequiredProperties();
    $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><card></card>');
    foreach ($this->printableProperties as $property) {
      if ($this->$property) {
        $xml->addChild($property, $this->$property);
      }
    }
    $this->prepareCustomValues($xml);
    return $xml->asXML();
  }

  /**
   * @param SimpleXMLElement $xml
   */
  private function prepareCustomValues(SimpleXMLElement $xml): void
  {
    if ($this->customValues) {
      $customValues = $xml->addChild('customValues');
      foreach ($this->customValues as $key => $value) {
        $customValue = $customValues->addChild('customValue');
        $customValue->addChild('key', $key);
        $customValue->addChild('value', $value);
      }
    }
  }

}
