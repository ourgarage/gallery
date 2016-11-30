<?php

namespace Ourgarage\Gallery;

use Illuminate\Support\ServiceProvider;

class GalleryServiceProvider extends ServiceProvider
{

    public function boot(){
        require __DIR__ . '/Http/routes.php';

        $this->loadViewsFrom(__DIR__.'/resources/views', 'gallery');

        $this->publishes([
            __DIR__.'/resources/views/admin/' => base_path('resources/views/vendor/gallery'),
        ]);

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'gallery');
    }

    public function register() {
        $this->app->make('Ourgarage\Gallery\Http\Controllers\Admin\GalleryController');
        $this->app->make('Ourgarage\Gallery\Models\GalleryPicture');
        $this->app->make('Ourgarage\Gallery\Models\GalleryCategory');
        $this->app->make('Ourgarage\Gallery\Models\GalleryCategoriesList');

        $this->mergeConfigFrom(__DIR__ . '/config/gallery.php', 'packages');
    }
}
