<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraduccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traducciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idioma_id')->unsigned()->default(null);
            $table->integer('obra_id')->unsigned()->default(null);
            $table->timestamps();

            $table->foreign('idioma_id')->references('id')->on('idiomas');
            $table->foreign('obra_id')->references('id')->on('obras'); 
                       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('traducciones');
    }
}
