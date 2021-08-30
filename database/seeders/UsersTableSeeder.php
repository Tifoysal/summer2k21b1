<?php

namespace Database\Seeders;

use App\Models\User;
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
       User::create(
           [
               'name'=>'Admin',
               'role'=>'admin',
               'email'=>'admin@gmail.com',
               'password'=>bcrypt('123456'),
               'mobile'=>'01616626263'
           ]
       );

    }
}
