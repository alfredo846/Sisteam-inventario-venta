<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('producto_id');
            $table->string('nombre',50)->nullable();
            $table->string('descripcion',50)->nullable();
            $table->string('codigo_barra')->nullable();
            $table->foreignId('medida_id')->nullable()->constraint('medidas');
            $table->foreignId('marca_id')->nullable()->constraint('marcas');
            $table->foreignId('categoria_id')->nullable()->constraint('categorias');
            $table->decimal('precio_compra',8,2)->default(0);
            $table->decimal('precio_venta',8,2)->default(0);
            $table->integer('stock_minimo')->default(0);
            $table->integer('stock_maximo')->default(0);
            $table->string('imagen',100)->nullable();
            $table->smallInteger('estado')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
