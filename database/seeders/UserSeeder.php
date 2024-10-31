<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'role' => 'administrator',
                'password' => bcrypt('123456'),

            ],
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'role' => 'user',
                'password' => bcrypt('123456'),

            ],
            [
                'name' => 'vendor',
                'email' => 'vendor@gmail.com',
                'role' => 'vendor',
                'password' => bcrypt('123456'),

            ],
            [
                'name' => 'ahli kesehatan',
                'email' => 'ahlikesehatan@gmail.com',
                'role' => 'ahli_kesehatan',
                'password' => bcrypt('123456'),

            ]
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
