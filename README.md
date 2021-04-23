# This is my package LaravelForgotPasswordCode

[![Latest Version on Packagist](https://img.shields.io/packagist/v/vanthao03596/laravel_forgot_password_code.svg?style=flat-square)](https://packagist.org/packages/vanthao03596/laravel_forgot_password_code)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/vanthao03596/laravel_forgot_password_code/run-tests?label=tests)](https://github.com/vanthao03596/laravel_forgot_password_code/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/vanthao03596/laravel_forgot_password_code/Check%20&%20fix%20styling?label=code%20style)](https://github.com/vanthao03596/laravel_forgot_password_code/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/vanthao03596/laravel_forgot_password_code.svg?style=flat-square)](https://packagist.org/packages/vanthao03596/laravel_forgot_password_code)

[](delete) 1) manually replace `phamthao, vanthao03596, auhor@domain.com, vanthao03596, vanthao03596, Vendor Name, laravel-forgot-password-code, laravel_forgot_password_code, laravel_forgot_password_code, LaravelForgotPasswordCode, This is my package LaravelForgotPasswordCode` with their correct values
[](delete) in `CHANGELOG.md, LICENSE.md, README.md, ExampleTest.php, ModelFactory.php, LaravelForgotPasswordCode.php, LaravelForgotPasswordCodeCommand.php, LaravelForgotPasswordCodeFacade.php, LaravelForgotPasswordCodeServiceProvider.php, TestCase.php, composer.json, create_laravel_forgot_password_code_table.php.stub`
[](delete) and delete `configure-laravel_forgot_password_code.sh`

[](delete) 2) You can also run `./configure-laravel_forgot_password_code.sh` to do this automatically.

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/package-laravel_forgot_password_code-laravel.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/package-laravel_forgot_password_code-laravel)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require vanthao03596/laravel_forgot_password_code
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Vanthao03596\LaravelForgotPasswordCode\LaravelForgotPasswordCodeServiceProvider" --tag="laravel_forgot_password_code-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Vanthao03596\LaravelForgotPasswordCode\LaravelForgotPasswordCodeServiceProvider" --tag="laravel_forgot_password_code-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravel_forgot_password_code = new Vanthao03596\LaravelForgotPasswordCode();
echo $laravel_forgot_password_code->echoPhrase('Hello, Spatie!');
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

- [phamthao](https://github.com/vanthao03596)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
