<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo', 
        'nombre', 
        'descripcion', 
        'precio', 
        'stock', 
        'categoria', 
        'marca'
    ];
}