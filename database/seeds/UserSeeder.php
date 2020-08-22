<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Yehia Bassam',
            'id' => '1',
            'email' => 'y@g.com',
            'email_verified_at' => '2020-08-22 04:34:08',
            'avatar' => 'default.PNG',
            'password' => '12345678',
            'created_at' => '2020-08-22 02:34:08',
            'updated_at' => '2020-08-22 02:34:08',
        ]);

        DB::table('users')->insert([
            'name' => 'Ahmed Ali',
            'id' => '2',
            'email' => 'a@g.com',
            'email_verified_at' => '2021-08-22 04:34:08',
            'avatar' => 'default.PNG',
            'password' => '12345678',
            'created_at' => '2021-08-22 02:34:08',
            'updated_at' => '2021-08-22 02:34:08',
        ]);

        DB::table('users')->insert([
            'name' => 'Mo Salah',
            'id' => '3',
            'email' => 'm@g.com',
            'email_verified_at' => '2022-08-22 04:34:08',
            'avatar' => 'default.PNG',
            'password' => '12345678',
            'created_at' => '2022-08-22 02:34:08',
            'updated_at' => '2022-08-22 02:34:08',
        ]);
    }
}
