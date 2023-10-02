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
        User::create([
            'name' => 'Brayan Emanuel Sanchez Ramirez',
            'email' => 'bs6961204@gmail.com',
            'password' => '12345678',
        ]);

        User::factory(99)->create();
    }
}
