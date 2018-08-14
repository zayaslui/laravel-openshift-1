<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnLayers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('layers', function (Blueprint $table) {
            $table->integer('slider_id')->unsigned()->index();
            $table->string('tipo',191);
            $table->string('clase',191);
            $table->string('data-ls',191)->nullable();
            $table->string('style',191)->nullable()->default(null);
            $table->string('src',191)->nullable()->default(null);
            $table->string('otros',191)->nullable()->default(null);
            $table->string('descripcion',191)->nullable()->default(null); 
            $table->foreign('slider_id')->references('id')->on('sliders')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('layers', function (Blueprint $table) {
            //
        });
    }
}
