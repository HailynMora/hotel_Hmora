<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->bigIncrements('codigoF');
            $table->bigInteger('numero')->unsigned();
            $table->integer('cliente')->unsigned();
            $table->integer('formaPago')->unsigned();
            $table->date('entrada');
            $table->date('salida');
            $table->float('total');
            $table->foreign('numero')  //Creación de la llave foranea
                ->references('numero')
                ->on('habitaciones');
            $table->foreign('cliente')  //Creación de la llave foranea
                ->references('id')
                ->on('cliente');
            $table->foreign('formapago')  //Creación de la llave foranea
                ->references('id')
                ->on('formaPago');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura');
    }
}
