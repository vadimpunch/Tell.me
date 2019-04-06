<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', array(
    'uses' => 'Admin\IndexController@show'
))->name('home');

Route::get('/page/{id}/{cat?}', function ($id) {
//    dd(env("APP_KEY"));
//    dd($_ENV);
//    dump(config('auth'));
//    dd(Config::get('app.locale'));
//    Config::set('app.locale', 'ru');
//    dd(Config::get('app.locale'));
    dd($id);
});
//})->where(array(
//    'id' => '[0-9]+',
//    'cat' => '[a-zA-Z]+'

//Route::get('/page/{id?}', function ($id = null) {
//  dd($id ?? 'Privet');
//});

Route::post('/comments', function () {
    dd($_POST);
});


Route::any('/comments', function () {
    dd("Any type of req");
})->name('coment');

Route::match(['get', 'post'], '/comments', function () {
    dd($_POST);
});

Route::group(['prefix' => 'admin'], function () {

    Route::get('page/create', function () {
        return redirect()->route('article', array('id' => 25));
    });

    Route::get('page/edit', function () {
        dd("Page edited");
    });
});

//Route::get('article/{id}', function ($id) {
//
//    dd(Route::current());
//
//})->name('article');


Route::get('/about', array(
    'uses' => 'Admin\AboutUsController@show',
    'as' => 'aboutUs'
));


Route::get('/articles', array(
        'uses' => 'Core@getArticles',
        'as' => 'articles'
    )
);

Route::get('/article/{id}', array(
        'uses' => 'Admin\Core@getPage',
        'as' => 'article',
        'middleware' => 'mymiddle:admin'
    )
);
//Route::get('pages/add', 'Admin\CoreResource@add');
//
//Route::resource('/pages', 'Admin\CoreResource', array(
//    "only" => array(
//        'index',
//        'show'
//    )
//));


Route::group(array(
    'middleware' => 'web'
),
    function () {

});

Route::match(['get', 'post'], '/contact/{id?}', 'ContactController@show')->name('contact');