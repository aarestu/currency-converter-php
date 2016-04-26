# Currency Converter PHP
[![Latest Version](https://img.shields.io/github/release/aarestu/currency-converter-php.svg?style=flat-square)](https://github.com/aarestu/currency-converter-php/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/aarestu/currency-converter-php/master.svg?style=flat-square)](https://travis-ci.org/aarestu/currency-converter-php)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/aarestu/currency-converter-php.svg?style=flat-square)](https://scrutinizer-ci.com/g/aarestu/currency-converter-php/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/aarestu/currency-converter-php.svg?style=flat-square)](https://scrutinizer-ci.com/g/aarestu/currency-converter-php)
[![Total Downloads](https://img.shields.io/packagist/dt/aarestu/currency-converter-php.svg?style=flat-square)](https://packagist.org/packages/aarestu/currency-converter-php)

Currency Converter PHP Library

## Install

Via Composer

``` bash
$ composer require aarestu/currency-converter
```

## Usage

``` php
use AaRestu\CurrencyConverter\CurrencyConverter;

require_once "vendor/autoload.php";

$class = new CurrencyConverter("USD");

echo $class->getRate("IDR");
```

## Testing

``` bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](https://github.com/aarestu/currency-converter-php/blob/master/CONTRIBUTING.md) for details.

## Credits

- [Restu Suhendar](https://github.com/aarestu)
- [All Contributors](https://github.com/aarestu/currency-converter-php/contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
