<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medida extends Model
{
    use HasFactory;

    protected $primarykey = "medida_id";

    protected $table = "medidas";

    protected $fillable = [
        'nombre',
        'codigo',
        'estado',
    ];
}
