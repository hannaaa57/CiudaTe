<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contacto;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contacto::create([ 
            'nombre'   => 'Hanna Amador',
            'email'   => 'hannaalejandra32@gmail.com',
            'telefono'   => '6677570577'
        ]);
    }
}
