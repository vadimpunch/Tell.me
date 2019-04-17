<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth');
    }

    public  function show(Request $request)
    {

//        $user = $request->user();

          $user = Auth::user();

//        if (!Auth::check())
//        {
//
//           $user = User::find(6);
////           Auth::guard('web')->login($user);
            return redirect('/login');
//            Auth::loginUsingId(6);
//        }

        $id = Auth::id();

        if (Auth::viaRemember()) {
             echo 'yes';
        }
        dump($id);

        return view('home');

    }
}
