<?php
declare(strict_types=1);

namespace Scardinius\CcdbPhpSdk\Service\HttpClient;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Scardinius\CcdbPhpSdk\Service\Configuration;

class HttpClient {

  protected $configuration;
  protected $client;

  public function __construct(Configuration $configuration)
  {
    $this->configuration = $configuration;
    $this->client = new Client([
      'base_uri' => $configuration->getBaseUrl(),
      RequestOptions::HTTP_ERRORS => $this->configuration->getHttpErrors(),
    ]);
  }

}
