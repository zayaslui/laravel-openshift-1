<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyObrasDet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('obras_det', function (Blueprint $table) {
            $table->integer('layerslider_id')->nullable()->unsigned()->change();
            $table->foreign('layerslider_id')->references('id')->on('layersliders')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('obras_det', function (Blueprint $table) {
            //
        });
    }
}
