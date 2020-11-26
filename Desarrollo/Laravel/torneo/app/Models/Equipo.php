<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $primaryKey='id';
    protected $table='equipos';
    protected $fillable=[
        'nombre_equipo', 'logo', 'localidades_id'
    ];

    // JOIN HasMany
}
