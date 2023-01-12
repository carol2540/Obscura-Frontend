<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'email' => 'suryamarcello@gmail.com',
                'name' => 'Feliciano',
                'password' => bcrypt('feliciano123'),
                'role' => 'admin',
                'email_verified_at' => '2022-02-28 19:35:15',
            ],
            [
                'email' => 'kevin@gmail.com',
                'name' => 'Kevin',
                'password' => bcrypt('kevin123'),
                'role' => 'user',
                'email_verified_at' => '2022-02-28 19:35:15',
            ],
            [
                'email' => 'lifos@gmail.com',
                'name' => 'Lifos',
                'password' => bcrypt('lifos123'),
                'role' => 'user',
                'email_verified_at' => '2022-02-28 19:25:25',
            ],
            [
                'email' => 'daniel@gmail.com',
                'name' => 'Daniel',
                'password' => bcrypt('daniel123'),
                'role' => 'user',
                'email_verified_at' => NULL,
            ],
        ];

        foreach($users as $user => $value){
            User::create($value);
        }
    }
}
