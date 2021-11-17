<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Animales;

class AnimalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Animales::create([
            'id_razas'=> '1',
            'nombre' =>'Lucas',
            'edad' =>'10',
            'observaciones'=>'Lucas es un perro muy cariñoso',
        ]);

        Animales::create([
            'id_razas'=> '2',
            'nombre' =>'Chispas',
            'edad' =>'7',
            'observaciones'=>'Chispas es un gato que le gusta jugar',
        ]);
    }
}
