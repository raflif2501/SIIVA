<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('kode_barang');
            $table->string('nama_barang');
            $table->string('register')->nullable();
            $table->string('merktype');
            $table->string('bahan')->nullable();
            $table->string('tahun')->nullable();
            $table->string('harga');
            $table->string('asal')->nullable();
            $table->string('ukuran')->nullable();
            $table->string('pabrik')->nullable();
            $table->string('rangka')->nullable();
            $table->string('mesin')->nullable();
            $table->string('nopol')->nullable();
            $table->string('bpkb')->nullable();
            $table->date('tanggal_perawatan')->nullable();
            $table->string('keterangan')->nullable();
            $table->foreignId('kategori_id')->constrained('kategoris');
            $table->foreignId('bidang_id')->constrained('bidangs');
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
        Schema::dropIfExists('barang');
    }
}
