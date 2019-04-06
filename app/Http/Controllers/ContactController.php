<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
//    protected $request;
//
//    public function __construct(Request $request)
//    {
//        $this->request = $request;
//    }

    public function show(Request $request, $id = false)
    {

//        $a = $request->input('email', 'Default');
//       if ($request->has('email')){
//           dump($request->input('email'));
//       }

//        dump($request->all());

//        $request->only('name', 'email');
//        $array = $request->except('email');
//        dump($request->email);
//        dump($request->path());
//        if ($request->is('contact/*'))
//        {
//            dump($request->path());
//        }
//        dump($request->fullUrl());
//        dump($request->url());
//        dump($request->method());

//        if ($request->isMethod('post')){
//            return redirect()->route('contact')->withInput();
//        }
//        $request->flash();//Пишит в сессию все поля формы
//        $request->flashOnly('pass');
//        $request->flashExcept('pass');
//            dump($request->root());
//        $request->query();
//       dump( $request->header());
//        dump($request->server());
//        dump($request->segments());
//        $request->flush();

//        $articles = DB::select("SELECT * FROM `articles`", [1]);
//        DB::insert('INSERT INTO `articles` (`name`, `text`, `img`) VALUES(?,?,?)', ['name', 'text', 'img']);
//        $last = DB::connection()->getPdo()->lastInsertId();


//        $articles = DB::select("SELECT * FROM `articles`", [1]);

//        $result = DB::update('UPDATE `articles` set `name` = "Test 2" WHERE id = ?', [1]);
//        DB::delete('DELETE FROM articles WHERE id = ?', [1]);
//        $articles = DB::select("SELECT * FROM `articles`");
//            DB::statement('DROP TABLE articles');
        $articles = DB::select("SELECT * FROM `articles`");
        return view('default.contact');

    }
}
