<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'sports',
            'user_id' => '1',
            'description' => 'play football match',
            'created_at' => '2020-06-16',
            'updated_at' => '2020-06-16'

        ]);

        DB::table('posts')->insert([
            'title' => 'cars',
            'user_id' => '1',
            'description' => 'drinking cofee',
            'created_at' => '2020-06-16',
            'updated_at' => '2020-06-16'
        ]);

        DB::table('posts')->insert([
            'title' => 'ships',
            'user_id' => '1',
            'description' => 'sleeping more time',
            'created_at' => '2020-06-16',
            'updated_at' => '2020-06-16'
        ]);

        DB::table('posts')->insert([
            'title' => 'toys',
            'user_id' => '1',
            'description' => 'protect himself',
            'created_at' => '2020-06-16',
            'updated_at' => '2020-06-16'
        ]);

        DB::table('posts')->insert([
            'title' => 'food',
            'user_id' => '1',
            'description' => 'watching tv',
            'created_at' => '2020-06-16',
            'updated_at' => '2020-06-16'
        ]);

        DB::table('posts')->insert([
            'title' => 'sports',
            'user_id' => '1',
            'description' => 'love tea',
            'created_at' => '2020-06-16',
            'updated_at' => '2020-06-16'
        ]);

        DB::table('posts')->insert([
            'title' => 'cars',
            'user_id' => '2',
            'description' => 'go to sleep',
            'created_at' => '2020-06-16',
            'updated_at' => '2020-06-16'
        ]);

        DB::table('posts')->insert([
            'title' => 'ships',
            'user_id' => '2',
            'description' => 'eat the dinner',
            'created_at' => '2020-06-16',
            'updated_at' => '2020-06-16'
        ]);

        DB::table('posts')->insert([
            'title' => 'toys',
            'user_id' => '2',
            'description' => 'jumping into fields',
            'created_at' => '2020-06-16',
            'updated_at' => '2020-06-16'
        ]);

        DB::table('posts')->insert([
            'title' => 'food',
            'user_id' => '2',
            'description' => 'play with friends',
            'created_at' => '2020-06-16',
            'updated_at' => '2020-06-16'
        ]);

        DB::table('posts')->insert([
            'title' => 'sports',
            'user_id' => '2',
            'description' => 'talking to directory',
            'created_at' => '2020-06-16',
            'updated_at' => '2020-06-16'
        ]);

        DB::table('posts')->insert([
            'title' => 'cars',
            'user_id' => '2',
            'description' => 'watching the sea',
            'created_at' => '2020-06-16',
            'updated_at' => '2020-06-16'
        ]);

        DB::table('posts')->insert([
            'title' => 'ships',
            'user_id' => '3',
            'description' => 'eat salamon',
            'created_at' => '2020-06-16',
            'updated_at' => '2020-06-16'
        ]);

        DB::table('posts')->insert([
            'title' => 'types',
            'user_id' => '3',
            'description' => 'playing with corona virus',
            'created_at' => '2020-06-16',
            'updated_at' => '2020-06-16'
        ]);

        DB::table('posts')->insert([
            'title' => 'category',
            'user_id' => '3',
            'description' => 'go to google',
            'created_at' => '2020-06-16',
            'updated_at' => '2020-06-16'
        ]);

    }
}
