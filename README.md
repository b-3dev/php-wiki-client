# wikiAPI

`wikiAPI` یک کتابخانه ساده PHP برای ارتباط با API‌های [wiki-api](https://wiki-api.ir) است. این پکیج از `Guzzle` برای ارسال درخواست‌های HTTP استفاده می‌کند و امکان ارسال درخواست‌های GET به URL‌های مختلف 

## پیش‌نیازها

برای استفاده از این پکیج، باید **PHP 7.4.3 یا بالاتر** نصب شده باشد.

## نصب

برای نصب این پکیج از Composer، ابتدا آن را به عنوان وابستگی به پروژه خود اضافه کنید.

### از Packagist نصب کنید

```bash
composer require b-3dev/wiki-client
```

## استفاده

بعد از نصب پکیج، می‌توانید آن را در پروژه خود به صورت زیر استفاده کنید:

```php
<?php
require 'vendor/autoload.php';

use Api\wikiAPI;
$wiki = new wikiAPI();
$response = $wiki->request('apis-1/ChatGPT', ['q' => 'سلام']);

print_r($response);
/*
Array
(
    [status_code] => 200
    [body] => {"status":true,"channel":"@Wiki_API","site":"Wiki-Api.ir","developers":"@B3dev, @Dumacel","results":"سلام! چطور می‌توانم به شما کمک کنم؟ 😊"}
)
*/
```