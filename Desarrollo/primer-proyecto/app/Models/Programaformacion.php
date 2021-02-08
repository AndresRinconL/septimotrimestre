<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Programaformacion extends Model
{

    use HasFactory;
    protected $table='programaformacion';
    protected $primaryKey='idPrograma';
    protected $fillable=
        ['codigo' , 'nombre' , 'siglas','fkJornada'];

    public function jornada(){
        return $this->belongsTo(Jornada::class,'fkJornada');
    }
    public function ficha(){
        return $this->hasMany(Ficha::class);
    }
}
