# url-shortener
Library for url convert to short code

## Installation

```console
composer require roman9330/url-shortener
```

## Use
### Example


```console
$fileRepository = new FileRepository('db.json');

$urlValidator = new UrlValidator(new Client());

$codeLength = 6;

$converter = new UrlConverter($fileRepository, $urlValidator, $codeLength);

$code = $converter->encode('https://google.com');

$url = $converter->decode($code);

echo $code . PHP_EOL;

echo $url . PHP_EOL;
```
