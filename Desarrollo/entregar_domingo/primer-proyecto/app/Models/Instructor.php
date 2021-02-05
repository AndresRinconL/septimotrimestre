<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

$user = Instructor::find(1);

foreach ($user->ficha as $ficha) {

}

class Instructor extends Model
{
    use HasFactory;
    protected $table='Instructor';
    protected $primaryKey='idInstructor';
    protected $fillable=
        ['nombres', 'apellidos', 'foto' , 'especialidad'];

    public function ficha()
    {
        return $this->belongsToMany(ficha_instructor::class);
    }
}
