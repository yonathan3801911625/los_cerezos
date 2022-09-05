<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Laura Hernandez',
                'email' => 'lvhernandez0082@misena.edu.co',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Norberto',
                'email' => 'nsalazar033@misena.edu.co',
                'password' => Hash::make('12345678'),
            ]
        ]);
    }
}
