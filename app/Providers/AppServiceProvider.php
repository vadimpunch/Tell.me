<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;
use Blade;
use Illuminate\Support\Facades\Schema;
use App\Article;
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
        Blade::directive('myDir', function ($var) {
            return "<h1> My directive - $var</h1>";
        });

        Response::macro('myRes', function ($value){
            return Response::make($value);
        });

        Schema::defaultStringLength(191);

//        DB::listen(function ($query) {
//
//          dump($query->sql);
////          dump($query->bindings);
//        });

        Article::created(function (Article $article) {
            Log::info('Article save:', [$article->user->name => $article->name]);
        });
    }
}
