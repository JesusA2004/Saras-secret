<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 255);
            $table->text('descripcion');
            $table->float('precio');
            $table->integer('cantidad');
            $table->string('categoria', 255);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        //
    }
};
