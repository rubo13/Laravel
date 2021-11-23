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
            'email'=>'ruben@gmail.com'
            
        ]);
    
        
        Clientes::create([
        
            'nombre' =>'Javier',
            'apellidos'=>'Fernandez',
            'direccion'=>'C/Begoña',
            'localidad'=>'Gijon',
            'telefono'=>'685825436',
            'email'=>'javier@gmail.com'
            
        ]);
    

    
        Cliente::create({
            'nombre' =>'Pedro',
            'apellidos'=>'Rodriguez',
            'direccion'=>'C/Tenderina',
            'localidad'=>'Oviedo',
            'telefono'=>'686739426',
            'email'=>'pedro@gmail.com'

        });
    

    

    Cliente::create({
        'nombre' =>'Clara',
        'apellidos'=>'Alvarez',
        'direccion'=>'C/Pelayo 8',
        'localidad'=>'Aviles',
        'telefono'=>'696251368',
        'email'=>'clara@gmail.com'

    });
    
    
    Cliente::create({
        'nombre' =>'Maria',
        'apellidos'=>'Menendez',
        'direccion'=>'C/Fruela',
        'localidad'=>'Oviedo',
        'telefono'=>'692856374',
        'email'=>'maria@gmail.com'
    });
}
