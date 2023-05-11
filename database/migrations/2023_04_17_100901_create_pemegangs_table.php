<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemegangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemegangs', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('surat');
            $table->date('tanggal');
            $table->date('batas');
            $table->foreignId('barang_id')->constrained('barangs');
            $table->foreignId('karyawan_id')->constrained('karyawans');
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
        Schema::dropIfExists('pemegangs');
    }
}
