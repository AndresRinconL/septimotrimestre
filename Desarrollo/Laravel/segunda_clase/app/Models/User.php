<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $table='users';
    protected $fillable=
        [
            'names','lastnames','email'
        ];
}
