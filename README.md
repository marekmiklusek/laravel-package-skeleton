![Create a logo for a PHP package skeleton_ a minimalist design, featuring a stylized skeletal structure representing a PHP file, rendered in vector format, utilizing a dark blue and light gray color palette, with a clean s](https://github.com/user-attachments/assets/5432dd9e-924d-418c-a9fa-2d9c648e27c0)

# PHP Package Skeleton

<p align="center">
  <a href="https://github.com/marekmiklusek/package-skeleton/actions"><img src="https://github.com/marekmiklusek/package-skeleton/actions/workflows/ci.yaml/badge.svg" alt="CI Pipeline"></a>
  <a href="https://packagist.org/packages/marekmiklusek/package-skeleton"><img src="https://img.shields.io/packagist/v/marekmiklusek/package-skeleton.svg" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/marekmiklusek/package-skeleton"><img src="https://img.shields.io/packagist/dt/marekmiklusek/package-skeleton.svg" alt="Downloads"></a>
  <a href="https://github.com/marekmiklusek/package-skeleton/blob/main/LICENSE.md"><img src="https://img.shields.io/badge/license-MIT-blue.svg" alt="License"></a>
</p>

🏗️ **Modern PHP package skeleton with development tools pre-configured.**

This package provides a comprehensive starting point for creating PHP packages with modern development tools already set up and configured.

## Features

- 🧪 **Pest** the Best PHP Testing Framework
- 🔍 **PHPStan (Larastan)** static analysis for PHP
- 🔧 **Rector** automated code refactoring and upgrades
- 📏 **Rector:dry-run** safe code refactoring
- 🎨 **Laravel Pint** code formatting
- 🚀 **GitHub Actions** CI/CD workflow
- 🗂️ **Service Provider** template

## Requirements

- PHP 8.3+

## Installation

You can create a new package using this skeleton via composer:

```bash
composer create-project marekmiklusek/package-skeleton --prefer-source MyAwesomePackage
```

This will create a new directory `MyAwesomePackage` with all the skeleton files and proper namespacing configured.

## Usage

After creating your package, you can use these commands:

Pest Testing:
```bash
composer test
```

PHPStan Analysis:
```bash
composer analyse
```

PHP Pint Formatting:
```bash
composer format
```

Rector Refactoring:
```bash
composer refactor
```

Dry Run Refactoring (safe):
```bash
composer refactor:dry-run
```

## What's Included

- **src/** - Your package source code
- **src/ServiceProvider.php** - Example service provider
- **tests/ExampleTest.php** - Example test file
- **composer.json** - Dependencies and scripts configured
- **phpstan.neon** - Static analysis configuration
- **rector.php** - Code refactoring rules
- **pint.json** - Code style configuration
- **.github/workflows/ci.yml** - GitHub Actions workflow

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more
