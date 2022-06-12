<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_de_empleados', function (Blueprint $table) {
            $table->bigIncrements("cod_empleado");
            $table->bigInteger('usuario')->unsigned();
            $table->string('nombre_empleado', 250);
            $table->string('numero_telefono', 20);
            $table->string('correo', 75);
            $table->string('direccion', 100);
            $table->string('departamento',45);
            $table->timestamps();
            $table->foreign('usuario')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_de_empleados');
    }
}
