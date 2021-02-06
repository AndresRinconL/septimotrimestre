<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Programaformacion extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table='Programa_form';
    protected $primaryKey='idPrograma';
    protected $fillable=
        ['codigo' , 'nombre' , 'siglas','fkJornada'];
    public function jornadaForm(){
        return $this->belongsTo(Jornada::class,'fkJornada');
    }
}
