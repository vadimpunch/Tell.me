<?php

use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('INSERT INTO pages (name, text, alias) VALUES (?,?,?)', array(
            'about',
            'Hello im about page',
            'about'
        ));
    }
}
