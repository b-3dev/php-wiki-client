# wikiAPI

`wikiAPI` is a simple PHP library for interacting with the [wiki-api](https://wiki-api.ir) APIs. This package uses `Guzzle` to send HTTP requests and allows making GET requests to various URLs.

## Prerequisites

To use this package, you need to have **PHP 7.4.3 or higher** installed.

## Installation

To install this package via Composer, simply add it as a dependency to your project.

### Install via Packagist

```bash
composer require b-3dev/php-wiki-client
```

## Usage

Once the package is installed, you can use it in your project as follows:

```php
<?php
require 'vendor/autoload.php';

use Api\wikiAPI;
$wiki = new wikiAPI();
$response = $wiki->request('apis-1/ChatGPT', ['q' => 'Hello']);

print_r($response);
/*
Array
(
    [status_code] => 200
    [body] => {"status":true,"channel":"@Wiki_API","site":"Wiki-Api.ir","developers":"@B3dev, @Dumacel","results":"Hello! How can I assist you today? 😊"}
)
*/
```
