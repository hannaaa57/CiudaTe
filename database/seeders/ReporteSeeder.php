<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reporte;

class ReporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reporte::create([ 
            'nombre'   => 'Estefania Armenta',
            'telefono'   => '6677894511',
            'comentario'   => 'La atropellaron',
        ]);
    }
}
