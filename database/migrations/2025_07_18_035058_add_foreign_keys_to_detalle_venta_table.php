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
        Schema::table('detalle_venta', function (Blueprint $table) {
            $table->foreign(['id_producto'], 'detalle_venta_id_producto_fkey')->references(['id_producto'])->on('productos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_venta'], 'detalle_venta_id_venta_fkey')->references(['id_venta'])->on('venta')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detalle_venta', function (Blueprint $table) {
            $table->dropForeign('detalle_venta_id_producto_fkey');
            $table->dropForeign('detalle_venta_id_venta_fkey');
        });
    }
};
