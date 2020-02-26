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
            'name' => 'User1',
            'email' => 'admin@mobillium.com',
            'password' => bcrypt('mobillium'),
            'role' => 'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'writer1@mobillium.com',
            'password' => bcrypt('mobillium'),
            'role' => 'writer'
        ]);
    }
}
