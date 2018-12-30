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
            $table->string('tabla');
            $table->integer('tabla_id');
            
            $table->string('descripcion');
            $table->timestamps();

            $table->foreign('idioma_id')->references('id')->on('idiomas');
                       
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
