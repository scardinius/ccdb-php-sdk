# Custom values and Chips

How to set up custom values and chips.

```php
use \Scardinius\CcdbPhpSdk\Model\Card;

$card = new Card();
$card->setCardNumber($cardNumber);
$card->setCardType(\Scardinius\CcdbPhpSdk\Model\CardType::ISIC);
$card->setCardStatus(\Scardinius\CcdbPhpSdk\Model\CardStatus::VALID);
$card->setPrintedName('William Riker');
$card->setDateOfBirth('2000-01-31');
$card->setValidTo('2022-09-30');
$card->setInstitutionName('Starfleet');
$card->setEmail('no-one@example.org');
$card->setCustomValues([
  'DateOfAccession' => '2354-11-11',
  'Spouse' => 'Deanna Troi'
]);
$card->setChips([
  \Scardinius\CcdbPhpSdk\Model\ChipType::MIFARE => '123321',
  \Scardinius\CcdbPhpSdk\Model\ChipType::EM_MARINE => '45346532'
]); // throw exception "Invalid chip type" if necessary
$xml = $card->prepareXml(); // throws exception "Missing required properties" if necessary

echo 'xml:' . $xml;
```
