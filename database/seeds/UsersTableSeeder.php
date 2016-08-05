<?php

use Illuminate\Database\Seeder;

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
            'name' => 'Justin Zablocki',
            'email' => 'zablockijj@gmail.com',
            'type' => 'admin',
            'is_admin' => true,
            'password' => bcrypt('MaBb17!!'),
        ]);
        DB::table('users')->insert([
            'name' => 'Victoria Zablocki',
            'email' => 'zablockivl@gmail.com',
            'type' => 'admin',
            'is_admin' => true,
            'password' => bcrypt('MaBb17!!'),
        ]);
    }
}
