<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com.br',
            'password' => bcrypt('12345678'),
            'api_token' => Str::random(60),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}