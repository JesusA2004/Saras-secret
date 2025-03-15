<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('correo', 100);
            $table->string('telefono', 20);
            $table->string('direccion', 100);
            $table->unsignedBigInteger('idUsuario')->nullable();
            $table->timestamps();
            // Definir la clave foránea
            $table->foreign('idUsuario')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        //
    }
};
