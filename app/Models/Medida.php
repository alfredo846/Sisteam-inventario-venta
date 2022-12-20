<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medida extends Model
{
    use HasFactory;

    protected $primaryKey = "medida_id";

    protected $table = "medidas";

    protected $fillable = [
        'nombre',
        'descripcion',
        'codigo',
        'estado',
    ];
}
