<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
 public function up(): void
    {
        Schema::create('cargos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 20);
            $table->string('nombre', 150);
            $table->boolean('activo')->default(true);
            $table->unsignedBigInteger('idUsuarioCreacion');
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('cargos');
    }
};
