<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Book;

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
            'jurusan' => '',
            'role' => 'Admin',
            'avatar' => 'batman.png'
        ]);

        Book::create([
            'codeBook' => 'A-001',
            'title' => 'Pulang',
            'creator' => 'Terelie',
            'publisher' => 'Terelie',
            'ISBN' => '297.73 PEN CB-D.09 2016-14494',
            'stock' => '10',
            'cover' => 'buku-1.jpg',
        ]);

        Book::create([
            'codeBook' => 'A-002',
            'title' => 'Pergi',
            'creator' => 'Terelie',
            'publisher' => 'Terelie',
            'ISBN' => '297.73 PEN CB-D.09 20973-23563',
            'stock' => '0',
            'cover' => 'buku-2.jpg',
        ]);
    }
}
