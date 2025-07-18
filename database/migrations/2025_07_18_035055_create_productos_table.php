<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id_producto');
            $table->bigInteger('codigo_producto')->unique('productos_codigo_producto_key');
            $table->string('nombre_producto', 250);
            $table->integer('stock')->default(0);
            $table->integer('precio')->default(0);
            $table->date('fecha_venc');
            $table->integer('id_categoria');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
