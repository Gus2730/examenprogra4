<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inicios extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo_inicio', 
        'descripcion_inicio'
    ];
}