<?php

namespace Scardinius\CcdbPhpSdk\Service;

class Configuration
{

  private $username = '';
  private $password = '';
  private $enviroment = '';

  public function __construct(string $username, string $password, string $enviroment)
  {
    $this->setUsername($username);
    $this->setPassword($password);
    $this->setEnviroment($enviroment);
  }

  /**
   * used for GuzzleHttp\RequestOptions::HTTP_ERRORS
   * @return bool
   */
  public function getHttpErrors(): bool {
    return false;
  }

  /**
   * @return string
   */
  public function getUsername(): string
  {
    return $this->username;
  }

  /**
   * @param string $username
   */
  private function setUsername(string $username): void
  {
    $this->username = $username;
  }

  /**
   * @return string
   */
  public function getPassword(): string
  {
    return $this->password;
  }

  /**
   * @param string $password
   */
  private function setPassword(string $password): void
  {
    $this->password = $password;
  }

  /**
   * @return string
   */
  public function getEnviroment(): string
  {
    return $this->enviroment;
  }

  /**
   * @param string $enviroment
   */
  private function setEnviroment(string $enviroment): void
  {
    $this->enviroment = $enviroment;
  }

  /**
   * @return string
   */
  public function getBaseUrl(): string
  {
    if ($this->getEnviroment() == Enviroment::STAGING) {
      return 'https://staging-api.isic.org/';
    }

    return 'https://api.isic.org/';
  }

}
