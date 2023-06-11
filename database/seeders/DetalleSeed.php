<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo')->insert([
            [
                'tipo' => "Auto",
                'estado' => 1
            ],
            [
                'tipo' => "Camión",
                'estado' => 1
            ],
            [
                'tipo' => "Motocicleta",
                'estado' => 1
            ],
            [
                'tipo' => "Camioneta",
                'estado' => 1
            ]
        ]);
    }
}
