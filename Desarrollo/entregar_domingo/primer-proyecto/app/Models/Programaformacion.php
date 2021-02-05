<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programaformacion extends Model
{
    use HasFactory;
    protected $table='Programa_form';
    protected $primaryKey='idPrograma';
    protected $fillable=
        ['codigo' , 'nombre' , 'siglas'];
    public function jornadaForm(){
        return $this->belongsToMany(programa_jornada::class);
    }
}
