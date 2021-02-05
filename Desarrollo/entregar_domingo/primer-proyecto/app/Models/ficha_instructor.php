<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ficha_instructor extends Model
{
    use HasFactory;
    protected $table='ficha_instructor';
    protected $fillable=
        ['idFicha', 'idInstructor'];

}
