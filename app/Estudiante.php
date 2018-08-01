<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiante';
    protected $primaryKey = 'idestudiante';
    public $timestamps = false;
    protected $fillable = ['paterno','materno','nombres','ci','codigo','foto'];
}
