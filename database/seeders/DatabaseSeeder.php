<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $DataDummyUser = [
            [
                'nama_lengkap'=>'admin',
                'username'=>'admin',
                'password'=>bcrypt ('12345'),
                'role'=>'admin',
            ],
        ];
        foreach ($DataDummyUser as $key => $value ) {
            User::create($value);
        }
    }
};
