# Get card

How to get existing card based on number.

```php
use \Scardinius\CcdbPhpSdk\Service\Configuration;
use \Scardinius\CcdbPhpSdk\Service\Enviroment;
use \Scardinius\CcdbPhpSdk\Service\Card\CardRequest;

$username = 'your-username';
$password = 'your-password';
$enviroment = Enviroment::STAGING; // or $enviroment = Enviroment::PRODUCTION;
$cardNumber = 'S000900100123A'; // your card

$configuration = new Configuration($username, $password, $enviroment);
$request = new CardRequest($configuration);
$response = $request->get($cardNumber);

echo $cardNumber . ' : ';
echo $response->getStatusCode();
echo $response->getBody();
```

## Responses

There are two possible results of the operation from `$response->getStatusCode()`:

* **HTTP 200 OK** - If the card was found.
* **HTTP 404 Not Found** - If the card with given identifier does not exist.


## Response

Method `$response->getBody()` return XML file for given card.
