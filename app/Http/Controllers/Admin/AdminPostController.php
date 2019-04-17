<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Events\onAddArticle;
use Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Event;

class AdminPostController extends Controller
{
    public function show()
    {
        return view('default.add_post');
    }

    public function  create(Request $request)
    {

        $article = new Article;

//        if (Gate::denies('add', $article)) {
//            return redirect()->back()->with(['message' => 'У вас нет прав']);
//        }

        if ($request->user()->  cannot('add', $article)){

            return redirect()->back()->with(['message' => 'У вас нет прав']);
        }

        $this->validate($request, array(
            'name'=>'required'
        ));
        $user = Auth::user();
        $data = $request->all();

        $res = $user->articles()->create(
            array(
                'name' => $data['name'],
                'img' => $data['img'],
                'text' => $data['text']
            )
        );

//        event(new onAddArticle($res, $user));
//        event('onAddArticle', $res, $user);
        return redirect()->back()->with('message', 'Материал добавлен');

    }
}
