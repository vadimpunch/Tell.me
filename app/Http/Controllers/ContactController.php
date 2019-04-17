<?php

namespace App\Http\Controllers;

use App\Helpers\Contracts\SaveStr;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Lang;




class ContactController extends Controller
{


    protected static $singleton;
//    protected $request;
//
//    public function __construct(Request $request)
//    {
//        $this->request = $request;
//    }

    public function store(Request $request, $id = false, SaveStr $saveStr)
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
//        $articles = DB::select("SELECT * FROM `articles`");

        dd(Lang::$app);
        $var = App::make('App\Helpers\Contracts\SaveStr');

        $var->save($request, $request->user());

        if ($request->isMethod('post')) {
//            $rules = [
//                'name'=>'unique:users'
////                'email'=>'required|email'
//            ];
//            $this->validate($request, $rules);

            $messages = [
                'name.required' => 'Поле :attribute обязательно к заполнению'
            ];
            $validator = Validator::make($request->all(), [
                'name' => 'required',
//                'email'=>'required'
            ], $messages);

            $validator->sometimes('email', 'required', function ($input) {

                return strlen($input->name) >= 10;
            });


            $validator->after(function ($validator) {

                $validator->errors()->add('name', 'Доп мессаге');
            });

            if ($validator->fails()) {

                $messages = $validator->errors();

                dd($validator->failed());
//                if ($messages->has('name'))
//                {
//                    dump($messages->all('<p>:message</p>>'));
//                }
//                dump($messages->first());
//                dump($messages->get('name'));
//                dump($messages->all());
                return redirect()->route('contact')->withErrors($validator)->withInput();
            }

        }
        return view('default.contact');

    }

    public function show(Request $request)
    {

//        $result =$request->session()->get('key', 'default');
//        $result =$request->session()->all();
//          $request->session()->put('key.first', 'value');

//          if ($request->session()->has('key.first'))
//
//          {
////              dump($request->session()->all());
//          }

        $result = $request->session()->all();
//        $request->session()->push('key.second', 'value2');
//        Session::push('key.second', 'value2');
//       session(['key2' => 'value 3']);
//        Session::forget('key2');
//        Session::flush();
//       dump(Session::pull('key'));
//        Session::flash('message', 'value');
        Session::reflash('message', 'value');
//        $titleHead =  Lang::get('messages.welcome');
//        $titleHead =  Lang::get('messages.hello', ['name' => 'Vadik']);
//        $titleHead =  Lang::choice('messages.apples', 18);

        if (Lang::has('messages.apples')) {
            $titleHead = Lang::choice('messages.apples', 18);
        }


        return view('default.contact', ['titleHead' => $titleHead]);
    }


}
