<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $table = 'Usuarios';

    protected $casts = [
        'estado' => 'boolean',
    ];

}
