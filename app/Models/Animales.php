<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animales extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'edad',
        'observaciones',
        

    ];

    public function Razas()
    {
        return $this->belongsToMany(raza::class)->withTimestamps();  
        {
            
        }
        
    }
}
