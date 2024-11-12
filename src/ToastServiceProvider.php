<?php

namespace Bouhaddou\ToastBhd;

use Illuminate\Support\ServiceProvider;

class ToastServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publier les fichiers de ressources (CSS, JS, Blade)
        $this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/toast-bhd'),
            __DIR__.'/../resources/views' => resource_path('views/vendor/toast-bhd'),
        ], 'toast-bhd-assets');

        // Ajouter le script et le CSS dans les vues
        \Blade::directive('toast', function () {
            return view('vendor.toast-bhd.toast');
        });
    }

    public function register()
    {
        // Enregistrer le service de toast
        $this->app->singleton('toast_bhd', function () {
            return new Toast();
        });
    }
}
