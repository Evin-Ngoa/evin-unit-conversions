# This is a simple unit conversion php package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/evin-ngoa/evin-unit-conversions.svg?style=flat-square)](https://packagist.org/p2/evin-ngoa/evin-unit-conversions)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/evin-ngoa/evin-unit-conversions/run-tests?label=tests)](https://github.com/evin-ngoa/evin-unit-conversions/actions?query=workflow%3ATests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/evin-ngoa/evin-unit-conversions/Check%20&%20fix%20styling?label=code%20style)](https://github.com/evin-ngoa/evin-unit-conversions/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/evin-ngoa/evin-unit-conversions.svg?style=flat-square)](https://packagist.org/packages/evin-ngoa/evin-unit-conversions)

---

## Installation

You can install the package via composer:

```bash
composer require evin-ngoa/evin-unit-conversions
```

## Usage

```php
    use EvinNgoa\EvinUnitConversions\Weight;

    Weight::fromKilograms(100)->toLbs(); // 220.4623
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Evingtone Ngoa](https://github.com/Evin-Ngoa)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
