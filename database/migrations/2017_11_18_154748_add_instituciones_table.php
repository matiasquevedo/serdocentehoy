<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInstitucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('instituciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->unique();
            $table->string('numero')->unique();
            $table->string('ubicacion')->unique();
            $table->enum('nivel',['nivel inicial','primaria','secundaria','nivel terciario','universidad']);
            $table->enum('tipo',['especial','albergue']);

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
