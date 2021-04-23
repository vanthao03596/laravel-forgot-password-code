<?php

namespace Vanthao03596\LaravelForgotPasswordCode\Commands;

use Illuminate\Console\Command;

class LaravelForgotPasswordCodeCommand extends Command
{
    public $signature = 'laravel_forgot_password_code';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
