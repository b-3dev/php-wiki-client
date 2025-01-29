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