<?php

namespace Database\Seeders;

use App\Models\RegistroHistorico;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegistroHistoricoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RegistroHistorico::factory(10)->create();
    }
}
