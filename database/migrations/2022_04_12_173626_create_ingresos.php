<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngresos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresos', function (Blueprint $table) {
            $table->id('cli_id');
            $table->string('ing_cantidad');
            $table->date('ing_fecha');
            $table->foreignid('usu_id');
            $table->foreignid('com_id');
            $table->string('ing_factura');
            $table->string('ing_iva');
            $table->string('ing_valor');
            $table->string('ing_valor_total');
            $table->string('ing_descuento');

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
        Schema::dropIfExists('ingresos');
    }
}

