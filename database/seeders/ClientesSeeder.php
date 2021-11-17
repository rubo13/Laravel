<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Clientes;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clientes::create([
        
            'nombre' =>'Ruben',
            'apellidos'=>'Suarez',
            'direccion'=>'C/Uria',
            'localidad'=>'Oviedo',
            'telefono'=>'684751236',
            'email'=>'ruben@gmail.com',
            
        ]);

        Clientes::create([
        
            'nombre' =>'Javier',
            'apellidos'=>'Fernandez',
            'direccion'=>'C/Begoña',
            'localidad'=>'Gijon',
            'telefono'=>'685825436',
            'email'=>'javier13@gmail.com',
            
        ]);
    }
}
