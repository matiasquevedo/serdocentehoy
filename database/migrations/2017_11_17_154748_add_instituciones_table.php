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

            $table->integer('user_id')->unsigned();//

            //llaves
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->rememberToken();
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
