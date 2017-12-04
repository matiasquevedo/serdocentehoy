<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLlamadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('llamados', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('titulo');
            $table->string('fecha');
            $table->string('hora');  
            $table->enum('orden',['primero','segundo','tercero','cuarto','quinto']);        
            $table->string('horario_catedra');//horario en que se tiene que dar clases
            $table->string('descripcion');//

            $table->integer('institucion_id')->unsigned();//datos de la escuela
            //llaves
            $table->foreign('institucion_id')->references('id')->on('instituciones')->onDelete('cascade');
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

    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
