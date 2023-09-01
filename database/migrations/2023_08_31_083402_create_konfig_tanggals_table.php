<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonfigTanggalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konfig_tanggals', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tglAwal');
            $table->dateTime('tglAkhir');
            $table->char('tahun_anggaran', 4);
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
        Schema::dropIfExists('konfig_tanggals');
    }
}
