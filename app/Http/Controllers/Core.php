<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Core extends Controller
{
    protected static $articles;

    public function __construct()
    {

    }

    public static function addArticles($array)
    {
        return self::$articles[] = $array;
    }

    public function show()
    {
        echo __METHOD__;
    }

    public function getArticles(Request $request)
    {
//        $articles = DB::table('articles')->get();
//        $articles =  DB::table('articles')->first();
//        $articles =   DB::table('articles')->value('name');
//          DB::table('articles')->chunkById(2, function ($articles) {
//                foreach ($articles as $article) {
//                    Core::addArticles($article);
//                }
//            });

//        $articles =  DB::table('articles')->pluck('name');
//        $articles =  DB::table('articles')->count('name');
//        $articles = DB::table('articles')->max('id');
//            $articles = DB::table('articles')->select('name', 'id')->get();
//            $articles = DB::table('articles')->select('name', 'id')->get();
//        $articles = DB::table('articles')->select('name')->distinct()->get();
//        $query  = DB::table('articles')->select('name');
//       $articles =  $query->addSelect('text as fulltext')->get();

//        $articles = DB::table('articles')->select()
//            ->where('id', '>', '2')
//            ->where('name', 'like', 'a', 'or')
//            ->orWhere('id', '<', '4')
//            ->get();

//        $articles = DB::table('articles')->select()
//            ->where(
//                array(
//                    ['id', '>', 2],
//                    ['name', 'like', '%Lorem', 'or']
//                )
//            )->get();

//        $articles = DB::table('articles')->whereBetween('id', [1,5])->get();
//        $articles = DB::table('articles')->whereNotBetween('id', [1,5])->get();

//        $articles = DB::table('articles')->whereIn('id', [1, 5, 2])->get();
//        $articles = DB::table('articles')->whereNotIn('id', [1, 5, 2])->get();

//        $articles = DB::table('articles')->groupBy('id')->get();
//        $articles = DB::table('articles')->take(2)->skip(1)->get();
//            $articles = DB::table('articles')->insert(
//                array(
//                    'name'=>'Запись',
//                    'text'=>'Ахуенна')
//            );
//           $articles = DB::table('articles')->insertGetId(
//                array(
//                    'name'=>'Запись 2',
//                    'text'=>'Ахуенна 2')
//            );

//       $articles = DB::table('articles')->where('id', 7)->update(
//            array(
//                'name' => 'Записи 1'
//            )
//        );

//        $articles = DB::table('articles')->where('id', 7)->delete();

//        $articles = DB::table('articles')
//            ->join('users', 'users.id', '=', 'articles.id')
//            ->select('articles.name', 'users.name')
//            ->get();
//
//        $fist = DB::table('articles')->whereNotNull('name');
//
//      $articles = DB::table('users')->whereNotNull('id')
//            ->union($fist)
//            ->get();

//        DB::table('articles')->increment('name', 2);
//        DB::table('articles')->decrement('name', 2);
//        dump($articles);

//        $articles = Article::all();

//       foreach ($articles as $article) {
//           $article->attributesToArray();
//          dump($article->getAttributes());
//       }
//       $articles =  Article::where('id', '<', '4')->take(2)->get();

//       Article::chunk(2, function ($articles) {
//
//       });

//        $article = Article::find(1);
//        $article = Article::where('id', '2')->first();

//        $article = Article::findOrFail('1');
//        $article = Article::where('id', '100')->firstOrFail();

//        $article = new Article;
//
//        $article->name = 'Article';
//        $article->text = 'New Text';
//        $article->save();
//        $articles = Article::all();

//        $article = Article::find(1);
//
//        $article->name = 'New name 2';
//        $article->text = 'New text 2';
//
//        $article->save();

//        Article::create(
//            array(
//                'name'=>'Article 3',
//                'text' => "New text 3"
//            )
//        );
//
//        $articles = Article::all();

//        $article =Article::firstOrCreate(
//            [
//                'name' => 'Article dfd',
//                'text' => 'New text gfd'
//            ]
//        );


//        $article = Article::firstOrNew(
//            [
//                'name' => 'Article 090',
//                'text' => 'New text kosk'
//            ]
//        );
//        $article->save();
//      $article =  Article::find(12);
//      $article->delete();

//        Article::destroy(8);
//        Article::destroy(['32', '12']);
//        Article::where('id', '>', '3');

//            $article = Article::find('4');
//            $article->delete();
//
//
//            $articles = Article::all();


//        $articles = Article::withTrashed()->get();
//            foreach ($articles as $article) {
//                if ($article->trashed()) {
//                    echo $article->id . 'Удалена';
//                    $article->restore();
//                } else echo $article->id . ' Не удалена';
//            }

//        $articles = Article::withTrashed()->restore();
//        $articles = Article::onlyTrashed()->restore();

//        $article = Article::find('3');
//        $article->forceDelete();


//        dump($articles);
    }

}
