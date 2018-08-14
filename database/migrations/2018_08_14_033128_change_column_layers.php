<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnLayers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('layers', function (Blueprint $table) {
            $table->string('data-ls', 191)->nullable()->default(null)->change();
            $table->string('src', 191)->nullable()->default(null)->change();
            $table->string('style', 191)->nullable()->default(null)->change();
            $table->string('otros', 191)->nullable()->default(null)->change();
            $table->string('descripcion', 191)->nullable()->default(null)->change();


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
