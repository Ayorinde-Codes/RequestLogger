# Description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ayorinde-codes/requestlogger.svg?style=flat-square)](https://packagist.org/packages/ayorinde-codes/requestlogger)

[![Stars](https://img.shields.io/github/stars/Ayorinde-Codes/RequestLogger.svg?style=flat-square)](https://github.com/Ayorinde-Codes/RequestLogger/stargazers)



RequestLogger is a Laravel Package that makes it easy to log requests ip, agent(browser or postman), payload request, payload response, Time of execution and url in the database within any request call.

## Requirements
This package requires:

PHP 7.1+
## Installation

You can install the package via composer:

```bash
composer require ayorinde-codes/requestlogger
```

Append the following line to the providers key in config/app.php to register the package:

```bash
    'providers' => [

Ayorindecodes\Requestlogger\RequestLoggerServiceProvider::class,
    ]
```
## Usage
## Kernel 

Append the following to the Kernel App\Http\Kernel.php in the $routeMiddleware and $middlewareGroups add
```bash
    protected $middlewareGroups = [

        'api' => [
            'request_logger'
        ]

protected $routeMiddleware =[
         'request_logger'=>Ayorindecodes\Requestlogger\Middleware\RequestLoggerMiddleware::class,
]
```

run composer dump-autoload


### Testing

``` bash
composer test
```

## Publish Package Assets (optional)
You may additionally publish the package configuration and language file using the vendor:publish Artisan command:

php artisan vendor:publish --provider="Ayorindecodes\Requestlogger\RequestLoggerServiceProvider"

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email ayorinde223@gmail.com instead of using the issue tracker.

## Credits

- [Ayorinde Akindemowo](https://github.com/ayorinde-codes)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
