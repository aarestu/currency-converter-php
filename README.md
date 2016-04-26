# Currency Converter PHP
[![Latest Version](https://img.shields.io/github/release/AaRestu/currency-converter-php.svg?style=flat-square)](https://github.com/AaRestu/currency-converter-php/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/AaRestu/currency-converter-php/master.svg?style=flat-square)](https://travis-ci.org/AaRestu/currency-converter-php)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/AaRestu/currency-converter-php.svg?style=flat-square)](https://scrutinizer-ci.com/g/AaRestu/currency-converter-php/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/AaRestu/currency-converter-php.svg?style=flat-square)](https://scrutinizer-ci.com/g/AaRestu/currency-converter-php)
[![Total Downloads](https://img.shields.io/packagist/dt/AaRestu/currency-converter.svg?style=flat-square)](https://packagist.org/packages/AaRestu/currency-converter)

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

Please see [CONTRIBUTING](https://github.com/AaRestu/currency-converter-php/blob/master/CONTRIBUTING.md) for details.

## Credits

- [Restu Suhendar](https://github.com/AaRestu)
- [All Contributors](https://github.com/AaRestu/currency-converter-php/contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
