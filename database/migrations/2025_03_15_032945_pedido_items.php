<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('pedidoItems', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idPedido');
            $table->unsignedBigInteger('idProducto');
            $table->integer('cantidad');
            $table->decimal('precio', 8, 2);
            $table->timestamps();
            $table->foreign('idPedido')->references('id')->on('pedidos');
            $table->foreign('idProducto')->references('id')->on('productos');
        });
    }

    public function down(): void
    {
        //
    }
};
