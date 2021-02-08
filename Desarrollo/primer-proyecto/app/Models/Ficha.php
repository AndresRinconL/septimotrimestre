<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ficha extends Model
{

    use HasFactory;
    use SoftDeletes;
    protected $table='Ficha';
    protected $primaryKey='idFicha';
    protected $dates = ['deleted_at'];
    protected $fillable=
        ['numFicha', 'description', 'estatus','fkInstructor','fkEstudiante ','fkPrograma'] ;
    public function estudiante()
    {
        return $this->hasMany(Estudiante::class,'fkEstudiante');
    }
    public function programa()
    {
        return $this->belongsTo(Programaformacion::class,'fkPrograma');
    }
    public function instructor(){
        return $this->belongsTo(Instructor::class,'fkInstructor');
    }
}
