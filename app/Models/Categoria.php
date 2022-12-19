<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $primarykey = "categoria_id";

    protected $table = "categorias";

    protected $fillable = [
        'nombre',
        'descripcion',
        'estado',
    ];
}
