<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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

        User::create([
            'nip' => '123.233.122',
            'name' => 'Muchsinin',
            'username' => 'admin',
            'password' => '$2y$10$xpNiLr7I8m1XX3dx64a10.BH0JO6DCth73DvEXQGkzdGrFZhGbgzm',
            'phone' => '081232123212',
            'role' => 'Admin'
        ]);
    }
}
