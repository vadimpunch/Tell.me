<?php

namespace App\Providers;

use App\Helpers\SaveEloquentORM;
use App\Helpers\SaveFiles;
use Illuminate\Support\ServiceProvider;

class SaveStrServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('savestr', function () {
           return new SaveEloquentORM();
//           return new SaveFiles();
        });

//        $this->app->singleton('SaveStr', function () {
//            return new SaveEloquentORM();
////           return new SaveFiles();


//        $obj = new SaveEloquentORM();
//         $this->app->instance('App\Helpers\Contracts\SaveStr', $obj);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
