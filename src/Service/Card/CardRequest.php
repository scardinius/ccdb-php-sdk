<?php

namespace Scardinius\CcdbPhpSdk\Service\Card;

use Scardinius\CcdbPhpSdk\Service\Configuration;
use Scardinius\CcdbPhpSdk\Service\HttpClient\HttpClient;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

class CardRequest extends HttpClient
{

  private const GET_PATH = 'ccdb2/rest/1.0/cards';

  public function __construct(Configuration $configuration)
  {
    parent::__construct($configuration);
  }

  /**
   * Get card
   * @param string $cardNumber
   * @return ResponseInterface
   * @throws GuzzleException
   */
  public function get(string $cardNumber): ResponseInterface {
    $uri = sprintf('%s/%s', self::GET_PATH, $cardNumber);
    return $this->client->get($uri, [
      RequestOptions::AUTH => [$this->configuration->getUsername(), $this->configuration->getPassword()],
    ]);
  }

  /**
   * Create card or update it if exists.
   *
   * @param string $xmlContent
   * @return ResponseInterface
   * @throws GuzzleException
   */
  public function create(string $xmlContent): ResponseInterface
  {
    return $this->client->post(self::GET_PATH, [
      RequestOptions::AUTH => [$this->configuration->getUsername(), $this->configuration->getPassword()],
      RequestOptions::BODY => $xmlContent,
      RequestOptions::HEADERS => ['Content-Type' => 'application/xml'],
    ]);
  }
}
