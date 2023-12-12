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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_inicial');
            $table->dateTime('fecha_vencimiento');
            $table->string('no_factura');
            $table->string('type');
            $table->string('nit');
            $table->foreignId('constructoras_id')->constrained('constructoras')->cascadeOnDelete();
            $table->foreignId('proveedores_id')->constrained('proveedores')->cascadeOnDelete();
            $table->string('concepto');
            $table->string('telefono');
            $table->string('prestamo_por');
            $table->float('valor_antes_de_iva');
            $table->float('reteica');
            $table->float('retefuente');
            $table->float('amortizacion');
            $table->float('retegarantia');
            $table->float('valor_a_pagar');

            $table->decimal('abono1', 10, 2)->nullable();
            $table->date('fecha_abono1')->nullable();

            $table->decimal('abono2', 10, 2)->nullable();
            $table->date('fecha_abono2')->nullable();

            $table->decimal('abono3', 10, 2)->nullable();
            $table->date('fecha_abono3')->nullable();

            $table->decimal('abono4', 10, 2)->nullable();
            $table->date('fecha_abono4')->nullable();

            $table->decimal('abono5', 10, 2)->nullable();
            $table->date('fecha_abono5')->nullable();

            $table->dateTime('fecha_de_transaccion');
            $table->string('pagar_por');
            $table->string('saldo');
            $table->dateTime('fecha_autorizacion_bancaria');
            $table->string('no_autorizacion');
            $table->dateTime('fecha_entrega_de_contabilidad');
            $table->dateTime('fecha_para_contabilizacion');
            $table->boolean('vbo_soacha')->default(false);
            $table->string('columna');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
