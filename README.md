# Laravel Package Skeleton

[![Latest Version on Packagist](https://img.shields.io/packagist/v/marekmiklusek/package-skeleton.svg?style=flat-square)](https://packagist.org/packages/marekmiklusek/package-skeleton)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/marekmiklusek/package-skeleton/run-tests?label=tests)](https://github.com/marekmiklusek/package-skeleton/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/marekmiklusek/package-skeleton.svg?style=flat-square)](https://packagist.org/packages/marekmiklusek/package-skeleton)

🏗️ **Modern Laravel package skeleton with development tools pre-configured.**

This package provides a comprehensive starting point for creating Laravel packages with modern development tools already set up and configured.

## Features

- 🧪 **Pest** the Best PHP Testing Framework
- 🔍 **PHPStan (Larastan)** static analysis for Laravel
- 🔧 **Rector** automated code refactoring and upgrades
- 📏 **Rector:dry-run** safe code refactoring
- 🎨 **Laravel Pint** code formatting
- 🚀 **GitHub Actions** CI/CD workflow
- 🗂️ **Service Provider** template

## Requirements

- PHP 8.3+
- Laravel 12.17+

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

Laravel Pint Formatting:
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