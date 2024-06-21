<?php

namespace Database\Seeders;

use App\Models\user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::create([
            'id'=>1,
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'role' => '4dm1n',
            'password' => 'password',
            'NoTelp' => '08123456789',
            'instansi' => '',
            'image' => 'default.png',
            'id_intern' => null,
            'id_unit' => null
        ]);
        user::create([
            'id'=>2,
            'name' => 'fadlan',
            'email' => 'fadlan@mail.com',
            'role' => 'intern',
            'password' => 'password123',
            'NoTelp' => '08111111111',
            'instansi' => 'telkom university',
            'image' => 'default.png',
            'id_intern' => 1,
            'id_unit' => 1
        ]);

    }
}
