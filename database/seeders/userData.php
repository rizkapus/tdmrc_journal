<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;  

class userData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Superadmin',
                'username' => 'superadmin',
                'password' => bcrypt('123456'),
                'level' => 1,
                'email' => 'a@gmail.com'
            ],
            [
                'name' => 'adminisitrator',
                'username' => 'admin',
                'password' => bcrypt('123456'),
                'level' => 2,
                'email' => 'b@gmail.com'
            ],
            [
                'name' => 'director',
                'username' => 'director',
                'password' => bcrypt('123456'),
                'level' => 3,
                'email' => 'c@gmail.com'
            ],
            [
                'name' => 'author',
                'username' => 'author',
                'password' => bcrypt('123456'),
                'level' => 4,
                'email' => 'd@gmail.com'
            ],
            ];

            foreach($user as $key => $value){
                User::create($value);
            }


    }
}
