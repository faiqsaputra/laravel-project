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
        User::Create([
            'name'=>'admin',
            'email'=>'FAIQ@gmail.com',
            'password'=>bcrypt('rahasia')
        ]);
        User::Create([
            'name'=>'staff',
            'email'=>'Blog@gmail.com',
            'password'=>bcrypt('anjing')
        ]);
    }
}
