<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show()
    {
        $factory = view();
//        return view('default.template')->with('title', 'Hello Word 2');
//        $view =  view('default.template');
//        $view->with('title2', 'Hllo World 2');
//        $view->with('title3', 'Hllo World 3');
//
//        return $view;
        if (view()->exists('default.index')){
//
            $data = array(
                'title' => 'Laravel Project',
                'data' => array(
                    'one' => 'List 1',
                    'two' => 'List 2',
                    'three' => 'List 3',
                    'four' => 'List 4',
                    'five' => 'List 5',
                ),
                'dataI' => ['List 1', 'List 2', 'List 3', 'List 4', 'List 5'],
                'bvar' => true,
                'script' => "<script>alert('hello')</script>"
            );

            return view('default.index', $data);

//            $path = config('view.paths');
//            return view()->file($path[0]. '/default/template.php')->withTitle2('Hello word 4');
//            return view('default.template')->withTitle2('Hello word 4');
        } else {
            abort(404);
        }


    }

}
