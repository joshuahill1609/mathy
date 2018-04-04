<?php

namespace jjh\Mathy;

use Illuminate\Support\ServiceProvider;

class MathyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Mathy::class, function(){
            return new Mathy();
        });
    }
}
