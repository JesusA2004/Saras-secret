<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idCliente');
            $table->decimal('total', 10, 2);
            $table->enum('estado', ['Pendiente', 'Completo', 'Cancelado']);
            $table->timestamps();
            $table->foreign('idCliente')->references('id')->on('clientes');
        });
    }

    public function down(): void
    {
        //
    }
};
