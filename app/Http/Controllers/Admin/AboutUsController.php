<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AboutUsController extends Controller
{
    public function show()
    {
      $data =  DB::select('SELECT * FROM pages');

      if (view()->exists('default.about')) {

          return view('default.about', ['data'=>$data]);
      }
      return abort(404);
    }
}
