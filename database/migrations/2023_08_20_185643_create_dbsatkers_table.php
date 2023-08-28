<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbsatkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dbsatkers', function (Blueprint $table) {
            $table->id();
            $table->string('pebin');
            $table->string('pbi');
            $table->string('wilayah');
            $table->string('ukpb');
            $table->string('upkpb');
            $table->string('kdukpb');
            $table->string('nmukpb');
            $table->string('nmpb');
            $table->string('jk');
            $table->string('kpknl');
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
        Schema::dropIfExists('dbsatkers');
    }
}
