<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libros extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'nombre_libro',
        'editorial',
        'genero',
        'No.paginas',
        'Año_edicion',
        'cantidad',
        'ISBN'
    ];
}
