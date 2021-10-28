# PHP SDK for CCDB API REST

This PHP SDK supports Central Card Database (CCDB) API REST provided by [International Student Identity Card](https://www.isic.org/).

Prepared based on [Integration Manual v12.0 - 2020-10-22](https://extranet.isic.org/documents/20147/29511/ISIC+UpdateCardV4+Web+Service+Specifications.pdf/a9eedbf5-1607-4ea2-82a4-e5cc7bc7cc43).

## Installation

```shell
composer require scardinius/ccdb-php-sdk
```

## Features

* getting cards
* creating/updating cards (without `chips` and `customValues` parameters)

## Using

* [getting cards](docs/get.md)
* [creating cards](docs/create.md)
