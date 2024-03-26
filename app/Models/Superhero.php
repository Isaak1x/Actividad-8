<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superhero extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_superheroe', 
        'nombre_real',
        'foto_url',
        'info', 
    ];
}
