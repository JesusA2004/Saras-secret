<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('carritos', function (Blueprint $table) {
            $table->id();
            $table->string('sesion_id', 255)->nullable();
            $table->unsignedBigInteger('idCliente')->nullable();
            $table->timestamps();
            $table->foreign('idCliente')->references('id')->on('clientes');
        });
    }

    public function down(): void
    {
        //
    }
};
