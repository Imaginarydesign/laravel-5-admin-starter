<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
 
    public function run()
    {
        // Delete users
        DB::table('users')->delete();

        // Create test users
        User::create([
          'name' => 'John Doe',
          'email'    =>'user@mycompany.com',
          'password' => Hash::make('password')
        ]);

    }
}
