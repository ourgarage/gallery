<?php

namespace Ourgarage\Gallery;

use Illuminate\Support\ServiceProvider;

class GalleryServiceProvider extends ServiceProvider
{

    public function boot(){
        require __DIR__ . '/Http/routes.php';

        $this->loadViewsFrom(__DIR__.'/resources/views', 'gallery');

        $this->publishes([
//            __DIR__.'/resources/images/contacts/' => base_path('public/packages/contacts'),
            __DIR__.'/resources/views/admin/' => base_path('resources/views/vendor/gallery'),
        ]);

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'gallery');
    }

    public function register() {
        $this->app->make('Ourgarage\Gallery\Http\Controllers\ContactsController');
        $this->app->make('Ourgarage\Gallery\Models\Contact');
        $this->app->make('Ourgarage\Gallery\Models\Feedback');

        $this->mergeConfigFrom(__DIR__ . '/config/gallery.php', 'packages');
    }
}
