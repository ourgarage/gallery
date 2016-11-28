<?php

namespace Ourgarage\Gallery;

use Illuminate\Support\ServiceProvider;

class GalleryServiceProvider extends ServiceProvider
{

    public function boot(){
        require __DIR__ . '/Http/routes.php';

        $this->loadViewsFrom(__DIR__.'/resources/views', 'contacts');

        $this->publishes([
            __DIR__.'/resources/images/contacts/' => base_path('public/packages/contacts'),
        ]);

        $this->publishes([
            __DIR__.'/resources/views/admin/' => base_path('resources/views/vendor/contacts'),
        ]);

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'contacts');
    }

    public function register() {
        $this->app->make('Ourgarage\Contacts\Http\Controllers\ContactsController');
        $this->app->make('Ourgarage\Contacts\Models\Contact');
        $this->app->make('Ourgarage\Contacts\Models\Feedback');

        $this->mergeConfigFrom(__DIR__.'/config/contacts.php', 'packages');
    }
}
