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
        return User::create([
            'name' => 'Rasel-Alim',
            'role_id' => 1,
            'email' => 'admin@gmail.com'
            'password' => bcrypt('rootadmin'),
        ]);

       }
}
