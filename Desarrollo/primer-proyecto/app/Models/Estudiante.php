<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estudiante extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='Estudiante';
    protected $primaryKey='idEstudiante';
    protected $fillable=
        [
            'documento','tipo_doc', 'nombres', 'apellidos', 'correo', 'fechaNacimiento', 'genero'
        ];
    public function estudiar(){
        return $this->belongsTo(Ficha::class,'idFicha');
    }

}
