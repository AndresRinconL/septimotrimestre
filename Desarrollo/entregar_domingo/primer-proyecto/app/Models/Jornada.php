<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    use HasFactory;
    protected $table='jornada';
    protected $primaryKey='idJornada';
    protected $fillable=
        ['nombreJornada'];
    public function programaForm(){
        return $this->belongsToMany(programa_jornada::class);
    }
}
