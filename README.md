# Programic - Fake Face Generator

[![Latest Version on Packagist](https://img.shields.io/packagist/v/programic/laravel-fake-face.svg?style=flat-square)](https://packagist.org/packages/programic/laravel-fake-face)
[![Total Downloads](https://img.shields.io/packagist/dt/programic/laravel-fake-face.svg?style=flat-square)](https://packagist.org/packages/programiclaravel-fake-face)

Laravel package that uses thispersondoesnotexist.com and the FakeFace-API to generate fake faces.

### Installation

```bash
composer require programic/laravel-fake-face
```
```bash
$faker = Faker::create('nl_NL');
$faker->addProvider(new Programic\FakeFace\Services\FakeFaceService($faker));
```

### Basic Usage
```bash
# Get fakeface url
$faker->fakeFaceUrl();
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security-related issues, please email [info@programic.com](mailto:info@programic.com) instead of using the issue tracker.

## Credits

- [Jeffrey van den Hondel](https://github.com/jeffreyvdhondel)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.