<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('carritoItems', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idCarrito');
            $table->unsignedBigInteger('idProducto');
            $table->integer('cantidad');
            $table->timestamps();
            $table->foreign('idCarrito')->references('id')->on('carrito')->onDelete('cascade');
            $table->foreign('idProducto')->references('id')->on('productos');
        });
    }

    public function down(): void
    {
        //
    }
};
