<?php

namespace Spatie\Enum\Laravel;

use Illuminate\Support\ServiceProvider;
use Spatie\Enum\Laravel\Commands\MakeEnum;

class EnumServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/enum'),
        ]);

        $this->loadTranslationsFrom(__DIR__.'/../resources/lang/', 'enum');
    }

    public function register()
    {
        $this->app->bind('command.make:enum', MakeEnum::class);

        $this->commands([
            'command.make:enum',
        ]);
    }
}
