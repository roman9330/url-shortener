# url-shortener
Library for url convert to short code

## Installation

```console
composer require roman9330/url-shortener
```


## Use
### Example

```console
<?php

use GuzzleHttp\Client;
use roman9330\UrlShortener\FileRepository;
use roman9330\UrlShortener\Helpers\UrlValidator;
use roman9330\UrlShortener\UrlConverter;

$fileRepository = new FileRepository('db.json');

$urlValidator = new UrlValidator(new Client());

$codeLength = 6;

$converter = new UrlConverter($fileRepository, $urlValidator, $codeLength);

$code = $converter->encode('https://google.com');

$url = $converter->decode($code);

echo $code . PHP_EOL;

echo $url . PHP_EOL;
```
