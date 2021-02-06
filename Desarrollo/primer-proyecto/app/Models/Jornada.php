<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Jornada extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table='jornada';
    protected $primaryKey='idJornada';
    protected $fillable=
        ['nombreJornada'];
    public function programa(){
        return $this->belongsToMany(programaformacion::class,'id');
    }
}
