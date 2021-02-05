<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ficha extends Model
{
    use HasFactory;
    protected $table='Ficha';
    protected $primaryKey='idFicha';
    protected $fillable=
        ['numFicha', 'jornada', 'programaF'] ;
    public function instructor()
    {
        return $this->belongsToMany(ficha_instructor::class);
    }
    public function programa(){
        return $this->hasOne(Programaformacion::class);
    }
}
