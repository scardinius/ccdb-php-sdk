# Create card

How to create new card or update existing card.

```php
use \Scardinius\CcdbPhpSdk\Model\Card;
use \Scardinius\CcdbPhpSdk\Service\Configuration;
use \Scardinius\CcdbPhpSdk\Service\Enviroment;
use \Scardinius\CcdbPhpSdk\Service\Card\CardRequest;

$username = 'your-username';
$password = 'your-password';
$enviroment = Enviroment::STAGING; // or $enviroment = Enviroment::PRODUCTION;
$cardNumber = 'S000900100123A'; // your card


$card = new Card();
$card->setCardNumber($cardNumber);
$card->setCardType(\Scardinius\CcdbPhpSdk\Model\CardType::ISIC);
$card->setCardStatus(\Scardinius\CcdbPhpSdk\Model\CardStatus::VALID);
$card->setPrintedName('William Riker');
$card->setDateOfBirth('2000-01-31');
$card->setValidTo('2022-09-30');
$card->setInstitutionName('Starfleet');
$card->setEmail('no-one@example.org');
$xml = $card->prepareXml(); // throws exception "Missing required properties" if necessary

$configuration = new Configuration($username, $password, $enviroment);
$request = new CardRequest($configuration);
$response = $request->create($xml);

echo 'response on creating : ' . $response->getStatusCode() . "\n";
echo $response->getBody();
```

## Responses

There are three possible results of the operation from `$response->getStatusCode()`:

* **HTTP 201 Created** - If a new card was created.
* **HTTP 200 OK** - If an existing card was updated.
* **HTTP 400 Bad Request** - If the request contains invalid input attributes and cannot be processed. In this case there is debug information in the response body which helps identify problems. Do not build your integration so that it relies on its current structure or response, it may be changed in the future.

## Response

Method `$response->getBody()` return XML file for given card.
