<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'lvhernandez0082@misena.edu.co',
        //     'password' => '12345678'
        // ]);

        $this->call([
            UserSeeder::class,
            CultivosSeeder::class,
            FasesSeeder::class,
            InsumosSeeder::class,
        ]);
    }
}
