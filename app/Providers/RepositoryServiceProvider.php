<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        $this->app->bind(
                \App\Repositories\Eloquent\CategoryInt::class, \App\Repositories\Eloquent\CategoryRepository::class
        );

        $this->app->bind(
                \App\Repositories\Eloquent\ProductInt::class, \App\Repositories\Eloquent\ProductRepository::class
        );

        $this->app->bind(
                \App\Repositories\Eloquent\ReviewInt::class, \App\Repositories\Eloquent\ReviewRepository::class
        );
        
        $this->app->bind(
                \App\Repositories\Eloquent\SubCategoryInt::class, \App\Repositories\Eloquent\SubCategoryRepository::class
        );
        
        $this->app->bind(
                \App\Repositories\CartInt::class, \App\Repositories\CartRepository::class
        );
    }

}
