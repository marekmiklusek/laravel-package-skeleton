# Changelog

All notable changes to this package are documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Changed

- Renamed the package to `marekmiklusek/laravel-package-skeleton`.
- Require PHP 8.4 and Laravel 13.
- Depend on `illuminate/support` instead of the full `laravel/framework`.
- Set `minimum-stability` to `stable`.
- Upgrade to Pest 5 with Testbench 11, arch tests and the Pest PHPStan extension.
- Enforce 100% code coverage and 100% type coverage.
- Run Pint, Rector and PHPStan against `src` and `tests`.
- Replace the multi-job CI pipeline with a single `composer test` matrix over
  PHP 8.4 / 8.5 and lowest / highest dependencies.

### Added

- `LICENSE.md`, `CHANGELOG.md`, `.editorconfig`, `.gitattributes`.
- `tests/TestCase.php` and `tests/Pest.php` wired to Testbench.
- Dependabot configuration for Composer and GitHub Actions, grouped into weekly PRs.
- `art/banner.svg` README banner.
- `tests/Unit/` with a test asserting the auto-discovery entry matches the provider class.

### Removed

- Redundant Pint rules already provided by the `laravel` preset.
