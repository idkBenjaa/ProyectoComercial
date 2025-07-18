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
        Schema::table('venta', function (Blueprint $table) {
            $table->foreign(['id_metodopago'], 'venta_id_metodopago_fkey')->references(['id_metodopago'])->on('metodo_pago')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_usuario'], 'venta_id_usuario_fkey')->references(['id_usuario'])->on('usuario')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('venta', function (Blueprint $table) {
            $table->dropForeign('venta_id_metodopago_fkey');
            $table->dropForeign('venta_id_usuario_fkey');
        });
    }
};
