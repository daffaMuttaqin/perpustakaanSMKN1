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

        User::create([
            'nip' => '123.233.122',
            'name' => 'Muchsinin',
            'username' => 'kepsek',
            'password' => '$2y$10$xpNiLr7I8m1XX3dx64a10.BH0JO6DCth73DvEXQGkzdGrFZhGbgzm',
            'phone' => '081232123212',
            'jurusan' => '',
            'role' => 'Kepala Sekolah',
            'avatar' => 'batman.png'
        ]);

        User::create([
            'nip' => '',
            'name' => 'Dummy Student',
            'username' => '123',
            'password' => '$2y$10$xpNiLr7I8m1XX3dx64a10.BH0JO6DCth73DvEXQGkzdGrFZhGbgzm',
            'phone' => '081232123212',
            'jurusan' => 'TKJ',
            'role' => 'Student',
            'avatar' => ''
        ]);

        User::create([
            'nip' => '',
            'name' => 'Dummy Student 2',
            'username' => '321',
            'password' => '$2y$10$xpNiLr7I8m1XX3dx64a10.BH0JO6DCth73DvEXQGkzdGrFZhGbgzm',
            'phone' => '081232123212',
            'jurusan' => 'TKJ',
            'role' => 'Student',
            'avatar' => ''
        ]);

        Book::create([
            'codeBook' => 'A-001',
            'title' => 'Pulang',
            'creator' => 'Terelie',
            'publisher' => 'Terelie',
            'ISBN' => '297.73 PEN CB-D.09 2016-14494',
            'stock' => '10',
            'cover' => 'Pulang-1708073608.jpg',
        ]);

        Book::create([
            'codeBook' => 'A-002',
            'title' => 'Pergi',
            'creator' => 'Terelie',
            'publisher' => 'Terelie',
            'ISBN' => '297.73 PEN CB-D.09 20973-23563',
            'stock' => '2',
            'cover' => 'Pergi-1708073615.jpg',
        ]);
    }
}
