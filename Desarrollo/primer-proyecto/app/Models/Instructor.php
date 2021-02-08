<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Monolog\Handler\FingersCrossedHandler;
use Illuminate\Database\Eloquent\SoftDeletes;

class Instructor extends Model
{

    use HasFactory;
    use SoftDeletes;
    protected $table='Instructor';
    protected $primaryKey='idInstructor';
    protected $dates=['deleted_at'];
    protected $fillable=
        ['nombres', 'apellidos' , 'especialidad'];

    public function ficha()
    {
        return $this->hasMany(Ficha::class);
    }
}
