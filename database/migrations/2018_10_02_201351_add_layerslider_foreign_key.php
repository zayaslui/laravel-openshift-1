<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLayersliderForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Obras_det', function (Blueprint $table) {
            $table -> integer('layerslider_id')->unsigned()->change();
            $table -> foreign('layerslider_id')->references('id')->on('layersliders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Obras_det', function (Blueprint $table) {
            $table -> dropColumn('layerslider_id');
        });
    }
}
