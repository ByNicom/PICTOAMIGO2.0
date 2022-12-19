<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pregunta extends Model
{
    use HasFactory,SoftDeletes;

    protected $table='pregunta';
    protected $primaryKey='idPregunta';
    protected $keyType='integer';
    public $timestamps=false;
    public $incrementing=true;
}
