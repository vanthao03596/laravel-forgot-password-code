<?php

namespace Vanthao03596\LaravelForgotPasswordCode;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Vanthao03596\LaravelForgotPasswordCode\Commands\LaravelForgotPasswordCodeCommand;

class LaravelForgotPasswordCodeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-forgot-password-code')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_forgot_password_code_table')
            ->hasCommand(LaravelForgotPasswordCodeCommand::class);
    }
}
