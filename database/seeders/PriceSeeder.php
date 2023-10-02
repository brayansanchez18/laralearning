<?php

namespace Database\Seeders;

use App\Models\Price;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Price::create([
            'name' => 'Gratis',
            'value' => 0,
        ]);
        Price::create([
            'name' => 'u$s 19.99 (Nivel 1)',
            'value' => 19.99,
        ]);
        Price::create([
            'name' => 'u$s 49.99 (Nivel 2)',
            'value' => 49.99,
        ]);
        Price::create([
            'name' => 'u$s 99.99 (Nivel 3)',
            'value' => 99.99,
        ]);
    }
}
