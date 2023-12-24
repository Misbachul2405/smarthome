<?php

namespace Database\Seeders;

use App\Models\Lamp;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
        public function run(): void
    {
        Lamp::create([
            'name' => 'Lampu Teras',
        ]);

        Lamp::create([
            'name' => 'Lampu Tengah',
        ]);

        Lamp::create([
            'name' => 'Lampu Kamar',
        ]);
    }
}