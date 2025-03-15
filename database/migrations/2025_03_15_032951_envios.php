<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('envios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idPedido');
            $table->string('numSeguimiento', 255);
            $table->string('transportista', 255);
            $table->string('estado', 255);
            $table->date('fechaEntrega');
            $table->timestamps();
            $table->foreign('idPedido')->references('id')->on('pedidos');
        });
    }

    public function down(): void
    {
        //
    }
};
