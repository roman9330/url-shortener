<?php

use GuzzleHttp\Client;
use roman9330\UrlShortener\FileRepository;
use roman9330\UrlShortener\Helpers\UrlValidator;
use roman9330\UrlShortener\UrlConverter;

require_once __DIR__ . '/../vendor/autoload.php';

$fileRepository = new FileRepository('db.json');
$urlValidator = new UrlValidator(new Client());
$converter = new UrlConverter(
    $fileRepository,
    $urlValidator,
    6
);

$code = $converter->encode('https://google.com');
echo $code . PHP_EOL;
$url = $converter->decode($code);
echo $url . PHP_EOL;