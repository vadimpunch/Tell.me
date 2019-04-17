<?php

namespace App\Http\Controllers\Admin;


use App\Article;
use Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostUpdateController extends Controller
{
    public function show(Request $request, $id)
    {
        $article = Article::find($id);

        return view('default.update_post')->with(['article' => $article]);
    }

    public function update(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required'
        ));



        $data = $request->except('_token');
        $user = Auth::user();
        $article = $user->articles()->find($data['id']);
        $this->authorize('update',$article);
        $this->authorizeForUser($user,'update',$article);

        if ($user->can('update', $article))
        {
            $article->name = $data['name'];
            $article->img = $data['img'];
            $article->text = $data['text'];

            $user->articles()->save($article);

            return redirect()->back()->with('message', 'Материал обновлен');
        }

        return redirect()->back()->with('message', 'Нет прав');
    }
}
