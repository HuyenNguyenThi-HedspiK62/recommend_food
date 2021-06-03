<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Mean;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // view()->composer('todos.tab1', function($view){
        //     $mean = Mean::where('type_id', 1);
        //     $view->with('mean', $mean);
        // });

    }
}
