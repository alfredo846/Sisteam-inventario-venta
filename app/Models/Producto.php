<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function Medida(){
        return $this->belongs(Medida::class);
    }
    
    public function Marca(){
        return $this->belongsTo(Marca::class);
    }

    public function Categoria(){
        return $this->belongs(Categoria::class);
    }

    protected $primarykey = "producto_id";

    protected $table = "productos";

    protected $fillable = [
        'nombre',
        'descripcion',
        'codigo_barra',
        'medida_id',
        'marca_id',
        'categoria_id',
        'precio_compra',
        'precio_venta',
        'stock_minimo',
        'stock_maximo',
        'imagen',
        'estado',
    ];
}
