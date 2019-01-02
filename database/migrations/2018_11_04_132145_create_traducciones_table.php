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
            $table->integer('traduccion');
            $table->string('descripcion');
            // $table->string('tabla');
            // $table->string('campo');
            
            // $table->integer('tabla_id');

            $table->timestamps();
            $table->integer('idioma_id')->unsigned()->default(null);
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
