<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Razas;

class RazasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Razas::create([

            'id_tipo' =>'1',
            'raza' =>'Beagle',
        ]);
   
    Razas::create([

        'id_tipo' =>'2',
        'raza' =>'Siames',
    ]);
}
}
