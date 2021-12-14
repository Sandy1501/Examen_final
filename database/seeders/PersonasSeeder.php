<?php

namespace Database\Seeders;

use App\Models\Personas;
use Illuminate\Database\Seeder;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $personas = new Personas();

        $personas->apellido_paterno="Gonzalez";
        $personas->apellido_materno="Reynoso";
        $personas->nombre="Sandra";
        $personas->fecha_nacimiento="1999-04-15";
        $personas->sexo="Femenino";
        
        $personas->save();

        $personas2 = new Personas();

        $personas2->apellido_paterno="Gonzalez";
        $personas2->apellido_materno="Reynoso";
        $personas2->nombre="Emmanuel";
        $personas2->fecha_nacimiento="2001-08-07";
        $personas2->sexo="Masculino";
        
        $personas2->save();

    }
}
