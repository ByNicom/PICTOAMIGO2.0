<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Respuesta extends Model
{
    use HasFactory,SoftDeletes;

    protected $table='respuesta';
    protected $primaryKey='idRespuesta';
    protected $keyType='integer';
    public $timestamps=false;
    public $incrementing=true;
}
