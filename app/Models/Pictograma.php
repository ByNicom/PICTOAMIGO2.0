<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pictograma extends Model
{
    use HasFactory,SoftDeletes;
    
    protected $table='pictograma';
    protected $primaryKey='idPicto';
    protected $keyType='integer';
    public $timestamps=false;
    public $incrementing=true;
}

