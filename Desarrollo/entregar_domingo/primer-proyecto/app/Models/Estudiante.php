<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Estudiante extends Model
{

    use HasFactory;
    protected $table='Estudiante';
    protected $primaryKey='idEstudiante';
    protected $fillable=
        [
            'documento','tipo_doc', 'nombres', 'apellidos', 'correo', 'fechaNacimiento', 'genero'
        ];
    public function estudiar(){
        return $this->belongsTo(Ficha::class);
    }

}
