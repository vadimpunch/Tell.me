<?php

use Illuminate\Database\Seeder;
use App\Article;
class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('INSERT INTO `articles` (`name`, `text`, `img`) VALUES (?,?,?)',
            array(
                'Blog post',
                '<p>Loremimpsum</p>>',
                'pic1.jpg'
            ));
        DB::table('articles')->insert(

            array(
                array(
               'name' => 'Blog post 2',
               'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam cupiditate delectus distinctio dolore eligendi eum illo impedit in, numquam odit officiis omnis quidem quo, similique sit suscipit temporibus unde!</p>',
                'img'=> 'pic2.jpg'
            ),
                array(
                    'name' => 'Blog post 2',
                    'text' => '<p>Гы</p>',
                    'img'=> 'pic2.jpg'
                )

        ));

        Article::create(
            array(
                'name' => 'Blog post 3',
                'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam cupiditate delectus distinctio dolore eligendi eum illo impedit in, numquam odit officiis omnis quidem quo, similique sit suscipit temporibus unde!</p>',
                'img'=> 'pic3.jpg'
            )
        );
    }
}
