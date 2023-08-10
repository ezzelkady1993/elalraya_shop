<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'fname'=>'Ezz',
            'lname'=>'Elkady',
            'email'=>'ezzelkady2018@gmail.com',
            'password'=>Hash::make('password'),
            'is_admin'=>1
        ]);
    }
}
