<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Caio',
            'email' => 'caio@gmail.com',
            'password' => bcrypt('12345678'),
            'admin' => '1',
        ]);

        DB::table('users')->insert([
            'name' => 'Gabriel Polido',
            'email' => 'polidovisk@gmail.com',
            'password' => bcrypt('12345678'),
            'admin' => '1',
        ]);

        DB::table('users')->insert([
            'name' => 'Fabio',
            'email' => 'fabio@gmail.com',
            'password' => bcrypt('12345678'),
            'admin' => '1',
        ]);

        DB::table('users')->insert([
            'name' => 'Dalan',
            'email' => 'dalan@gmail.com',
            'password' => bcrypt('12345678'),
            'admin' => '1',
        ]);

        DB::table('users')->insert([
            'name' => 'Danilo',
            'email' => 'Danilo@gmail.com',
            'password' => bcrypt('12345678'),
            'admin' => '1',
        ]);

        DB::table('users')->insert([
            'name' => 'Gabriel W',
            'email' => 'gabrielw@gmail.com',
            'password' => bcrypt('12345678'),
            'admin' => '1',
        ]);
    }
}
