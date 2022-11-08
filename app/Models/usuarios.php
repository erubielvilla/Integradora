<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
            'id',
            'Nombre_U',
            'Apellido_P',
            'Apellido_M',
            'Telefono',
            'Email',
            'contraseña'
    ];
}
