<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Classe;
use App\Models\Cours;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Partager les classes et matières avec le sidebar
        View::composer('layouts.components.sidebar', function ($view) {
            $classes = Classe::with('speciality')->get();
            $matieres = Cours::all();
            
            $view->with([
                'classes' => $classes,
                'matieres' => $matieres
            ]);
        });
    }
}
