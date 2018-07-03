<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BorrarCambosGenero2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('generos',function(Blueprint $table){
            $table -> dropColumn('imagen');
            $table -> dropColumn('titulo_obra');
            $table -> dropColumn('contenido_obra');
            $table -> dropColumn('introduccion');
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
