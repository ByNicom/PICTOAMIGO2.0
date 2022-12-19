<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Catpicto extends Model
{
    use HasFactory,SoftDeletes;

    protected $table='catpicto';
    protected $primaryKey='idCatPicto';
    protected $keyType='integer';
    public $timestamps=false;
    public $incrementing=true;
}
