<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class adminSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('usuarios')->insert([
            [
                'id'             => 12,
                'nombre_completo' => 'admin1',
                'email'          => 'admin@gmail.com',
                'password'       => Hash::make('admin123'),
                'rol'            => 'admin',
                'avatar'         => 'avatars/6beb5c15-3e3c-4f38-a742-f52462474bc9.jpg',
                'banner'         => 'banners/8b7f2a9f-3e3e-4893-8c18-208fdbfe6882.jpg',
                'created_at'     => '2025-12-16 12:09:02',
                'updated_at'     => '2025-12-16 09:18:43',
            ],
        ]);
    }
}