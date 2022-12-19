<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Acthorario extends Model
{
    use HasFactory,SoftDeletes;

    protected $table='act_horario';
    protected $primaryKey='idHorario';
    protected $keyType='integer';
    public $timestamps=false;
    public $incrementing=true;

}
