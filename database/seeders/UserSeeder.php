<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Jafar Madadi',
                'user_name' => 'jafar_11353',
                'email' => 'jafar.madadi76@gmail.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('password@J')
            ],
            [
                'name' => 'Writer',
                'user_name' => 'writer_1',
                'email' => 'writer1@gmail.com',
                'role' => 'writer',
                'status' => 'inactive',
                'password' => bcrypt('password@J')
            ]
        ]);
    }
}
