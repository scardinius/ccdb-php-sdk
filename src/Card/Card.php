<?php

namespace Scardinius\CcdbPhpSdk\Card;

use Scardinius\CcdbPhpSdk\Configuration;
use Scardinius\CcdbPhpSdk\HttpClient\HttpClient;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

class Card extends HttpClient
{

  private const GET_PATH = 'ccdb2/rest/1.0/cards/';

  public function __construct(Configuration $configuration)
  {
    parent::__construct($configuration);
  }

  /**
   * @param string $cardNumber
   * @return ResponseInterface
   * @throws GuzzleException
   */
  public function get(string $cardNumber): ResponseInterface {
    $uri = sprintf('%s%s', self::GET_PATH, $cardNumber);
    return $this->client->get($uri, [
      RequestOptions::AUTH => [$this->configuration->getUsername(), $this->configuration->getPassword()],
    ]);
  }

}
