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
            'password' => bcrypt('harvard1'),
        ]);
    }
}
