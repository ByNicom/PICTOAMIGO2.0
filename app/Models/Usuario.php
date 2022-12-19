<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticable;

class Usuario extends Authenticable
{
    use HasFactory,SoftDeletes;

    protected $table='usuario';
    protected $primaryKey='Email';
    protected $keyType='string';
    public $timestamps=false;
    public $incrementing=false;
    protected $fillable = [
        'Email',
        'NomUsuario',
        'ApeUsuario',
        'password',
        'clave'
    ];

}
