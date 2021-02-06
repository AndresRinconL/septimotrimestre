<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ficha extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table='Ficha';
    protected $primaryKey='idFicha';
    protected $fillable=
        ['numFicha', 'jornada', 'programaF'] ;
    public function estudiante()
    {
        return $this->hasMany(Estudiante::class,'fkEstudiante');
    }
    public function programa()
    {
        return $this->belongsTo(Programaformacion::class,'fkPrograma');
    }
    public function instructor(){
        return $this->belongsToMany(Instructor::class,'idInstructor');
    }
}
