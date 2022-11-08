<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'Nombre_libro',
        'Editorial',
        'Autor',
        'Genero',
        'Año_edicion',
        'Volumenes',
        'ISBN'
    ];
}
