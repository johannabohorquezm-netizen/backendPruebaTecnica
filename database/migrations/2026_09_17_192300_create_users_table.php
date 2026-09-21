<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('usuario', 50)->unique();
            $table->string('email', 150)->unique();

            $table->string('primerNombre', 100);
            $table->string('segundoNombre', 100)->nullable();

            $table->string('primerApellido', 100);
            $table->string('segundoApellido', 100)->nullable();

            $table->unsignedBigInteger('idDepartamento');
            $table->unsignedBigInteger('idCargo');

            $table->timestamps();

            $table->foreign('idDepartamento')
                ->references('id')
                ->on('departamentos');

            $table->foreign('idCargo')
                ->references('id')
                ->on('cargos');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
