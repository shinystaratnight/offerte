<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
//        $month_names = [
//            1 => 'gennaio',
//            2 => 'febbraio',
//            3 => 'marzo',
//            4 => 'aprile',
//            5 => 'maggio',
//            6 => 'giugno',
//            7 => 'luglio',
//            8 => 'agosto',
//            9 => 'settembre',
//            10 => 'ottobre',
//            11 => 'novembre',
//            12 => 'dicembre',
//        ];
//        View::share('month_names', $month_names);
        Paginator::useBootstrap();
    }
}
