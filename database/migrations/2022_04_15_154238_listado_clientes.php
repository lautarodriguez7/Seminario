<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ListadoClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listado_clientes', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('cuit');
            $table->string("nombre");
            $table->string("direccion");
            $table->BigInteger("telefono");
            $table->string("email");
            $table->string("localidad");
            $table->string("codigo_postal");
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
