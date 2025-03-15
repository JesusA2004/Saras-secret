<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idPedido');
            $table->decimal('monto', 10, 2);
            $table->enum('metodo', ['paypal', 'credit_card', 'debit_card', 'oxxo', 'apple_pay']);
            $table->string('idTransaccion', 255);
            $table->enum('estado', ['Pendiente', 'Completo', 'Fallida']);
            $table->timestamps();
            $table->foreign('idPedido')->references('id')->on('pedidos');
        });
    }

    public function down(): void
    {
        //
    }
};
