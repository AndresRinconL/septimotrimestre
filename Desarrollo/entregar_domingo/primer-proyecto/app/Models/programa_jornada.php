<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class programa_jornada extends Model
{
    use HasFactory;
    protected $table='programa_jornada';
    protected $fillable=
        ['idPrograma', 'idJornada'];
}
