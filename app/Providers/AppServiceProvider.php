<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        $this->loadViewsFrom(base_path('resources/views/loja'), 'loja');
        $this->loadViewsFrom(base_path('resources/views/site'), 'painel');
        $this->loadViewsFrom(base_path('resources/views/errors'), 'erro');
    }

}
