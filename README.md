# Laravel Package Skeleton

[![Latest Version on Packagist](https://img.shields.io/packagist/v/marekmiklusek/package-skeleton.svg?style=flat-square)](https://packagist.org/packages/marekmiklusek/package-skeleton)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/marekmiklusek/package-skeleton/run-tests?label=tests)](https://github.com/marekmiklusek/package-skeleton/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/marekmiklusek/package-skeleton.svg?style=flat-square)](https://packagist.org/packages/marekmiklusek/package-skeleton)

🏗️ **Modern Laravel package skeleton with development tools pre-configured.**

This package provides a comprehensive starting point for creating Laravel packages with modern development tools already set up and configured.

## Features

- 🧪 **Pest** testing framework with Feature/Unit structure
- 🔍 **PHPStan (Larastan)** static analysis for Laravel
- 🔧 **Rector** automated code refactoring and upgrades
- 🎨 **Laravel Pint** code formatting
- 🚀 **GitHub Actions** CI/CD workflow
- 📁 **PSR-4** autoloading structure
- 🗂️ **Service Provider** template

## Installation

You can create a new package using this skeleton via composer:

```bash
composer create-project marekmiklusek/package-skeleton --prefer-source MyAwesomePackage
```

This will create a new directory `MyAwesomePackage` with all the skeleton files and proper namespacing configured.

## Usage

After creating your package, you can use these commands:

```bash
# Run tests
composer test

# Static analysis
composer analyse

# Code formatting
composer format

# Automated refactoring
composer refactor
```

## What's Included

- **src/** - Your package source code
- **tests/Feature/** - Feature tests directory
- **tests/Unit/** - Unit tests directory
- **composer.json** - Dependencies and scripts configured
- **phpstan.neon** - Static analysis configuration
- **rector.php** - Code refactoring rules
- **pint.json** - Code style configuration
- **.github/workflows/ci.yml** - GitHub Actions workflow
- **Service Provider** - Laravel service provider template

## Requirements

- PHP 8.3+
- Laravel 12.17+

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Marek Miklusek](https://github.com/marekmiklusek)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more