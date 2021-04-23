<?php

namespace Vanthao03596\LaravelForgotPasswordCode;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Vanthao03596\LaravelForgotPasswordCode\LaravelForgotPasswordCode
 */
class LaravelForgotPasswordCodeFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-forgot-password-code';
    }
}
