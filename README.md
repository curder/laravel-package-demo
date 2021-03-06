# laravel-package-demo

[![Latest Version on Packagist](https://img.shields.io/packagist/v/curder/laravel-package-demo.svg?style=flat-square)](https://packagist.org/packages/curder/laravel-package-demo)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/curder/laravel-package-demo/run-tests?label=tests)](https://github.com/curder/laravel-package-demo/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/curder/laravel-package-demo/Check%20&%20fix%20styling?label=code%20style)](https://github.com/curder/laravel-package-demo/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/curder/laravel-package-demo.svg?style=flat-square)](https://packagist.org/packages/curder/laravel-package-demo)


This is a laravel package, and it is a demo for study.

## Installation

You can install the package via composer:

```bash
composer require curder/laravel-package-demo
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Curder\LaravelPackageDemo\LaravelPackageDemoServiceProvider" --tag="laravel-package-demo-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Curder\LaravelPackageDemo\LaravelPackageDemoServiceProvider" --tag="laravel-package-demo-config"
```

This is the contents of the published config file:

```php
return [
    /**
     * This is the text what will be output by the package command.
     */
    'command_output_text' => 'Hi from command',

    'another_option' => 'Another value',
];
```

You can publish the view files with:
```bash
php artisan vendor:publish --provider="Curder\LaravelPackageDemo\LaravelPackageDemoServiceProvider" --tag="laravel-package-demo-views"
```


## Usage

customize route prefix, you should in routes of application

```php
use Illuminate\Support\Facades\Route;

Route::laravelPackageDemo('your/customize/prefix');
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

- [curder](https://github.com/curder)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
