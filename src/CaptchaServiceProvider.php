<?php

namespace Validation\Captcha;

use Illuminate\Support\ServiceProvider;

class CaptchaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        dd("does it work");
    }

    public function register()
    {
    }
}
