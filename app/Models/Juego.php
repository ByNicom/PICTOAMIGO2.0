<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Juego extends Model
{
    use HasFactory,SoftDeletes;

    protected $table='juego';
    protected $primaryKey='idJuego';
    protected $keyType='integer';
    public $timestamps=false;
    public $incrementing=true;
}
