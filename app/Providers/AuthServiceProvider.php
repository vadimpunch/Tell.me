<?php

namespace App\Providers;

use App\Article;
use App\Policies\ArticlePolicy;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Article::class => ArticlePolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

////        Gate::define('add-article', 'ClassName@func');
//        Gate::define('add-article', function (User $user) {
//
//          foreach ($user->roles as $role)
//          {
//              if ($role->name == 'admin'){
//                  return true;
//              }
//
//          }
//            return false;
//        });
//
//        Gate::define('update-article', function (User $user,  $article) {
//
//            foreach ($user->roles as $role)
//            {
//                if ($role->name == 'admin') {
//                    if ($user->id == $article->user_id) {
//                        return true;
//                    }
//                }
//            }
//            return false;
//        });
//    }
    }
}
