# Opensmarty Rest API Client

[![Latest Version](https://img.shields.io/github/release/opensmarty/rest-api-client.svg?style=flat-square)](https://github.com/opensmarty/rest-api-client/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/opensmarty/rest-api-client.svg?style=flat-square)](https://packagist.org/packages/opensmarty/rest-api-client)

Opensmarty Starter API Client is an elegant and smart Rest API Client with OAuth2 authentication support. 

Build for Laravel and [Opensmarty Starter](https://opensmarty.github.io). 

It can be used for accessing APIs created using [Opensmarty Starter](https://opensmarty.github.io) framework.

## Install

### Via Composer

Install composer package to your laravel project

``` bash
composer require opensmarty/rest-api-client
```

Add Service Provider to `config/app.php`

``` php
    'providers' => [
        ...
        Opensmarty\Rest\RestClientServiceProvider::class,
        ...
    ],
```

Publishing config file. 

``` bash
php artisan vendor:publish
```

After published, config file for Rest Client is `config/rest-client.php`, you will need to config it to use Rest Client.

## Usage

``` php
$restClient = new \Opensmarty\Rest\RestClient('Opensmarty-starter');

$restClient->setOAuthUserCredentials([
    'username' => 'opensmarty@163.com',
    'password' => 'Abc12345',
]);
$restClient->withOAuthTokenTypeUser();

$response = $restClient->get("users")->getResponse();
if (!$restClient->isResponseStatusCode(200)) {
    $restClient->printResponseOriginContent();
    $responseMessage = $restClient->getResponseMessage();
    print_r($responseMessage);
} else {
    $responseData = $restClient->getResponseData();
    print_r($responseData);
}
```

## Testing

``` bash
phpunit
```

## Contributing

Please see [CONTRIBUTING](https://github.com/opensmarty/rest-api-client/blob/master/CONTRIBUTING.md) for details.

## Credits

- [Opensmarty](https://github.com/opensmarty)
- [All Contributors](https://github.com/opensmarty/rest-api-client/contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
