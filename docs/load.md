# Load object

How to create `Card` object based on values in array.

```php
use \Scardinius\CcdbPhpSdk\Model\Card;

$cardNumber = 'S000900100123A'; // your card
$values = [
  'cardNumber' => $cardNumber,
  'cardType' => CardType::ITIC,
  'printedName' => 'William Riker',
  'cardStatus' => \Scardinius\CcdbPhpSdk\Model\CardStatus::VALID,
  'dateOfBirth' => '2020-01-01',
  'validTo' => '2022-09-30',
  'institutionName' => 'Starfleet',
  'invalidParameter' => 'will-not-trigger-error',
];
$card = (new Card())->load($values);

$xml = $card->prepareXml();
echo 'xml: ' . $xml;
```
