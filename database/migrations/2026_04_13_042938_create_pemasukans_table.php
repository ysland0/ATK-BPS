<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pemasukans', function (Blueprint $table) {
            $table->id();
            $table->string('tipe_pemasukan'); // pembelian atau transfer
            $table->string('supplier')->nullable();
            $table->string('no_surat_jalan')->nullable();
            
            // Kita simpan ID barangnya saja, bukan namanya. 
            // Ini supaya datanya terhubung sempurna dengan tabel barangs.
            $table->unsignedBigInteger('barang_id'); 
            
            $table->integer('jumlah');
            $table->bigInteger('satuan_harga')->nullable();
            $table->date('tanggal_pemasukan');
            $table->text('keterangan')->nullable();
            $table->timestamps();

            // Hubungkan barang_id ke id di tabel barangs
            $table->foreign('barang_id')->references('id')->on('barangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemasukans');
    }
};
