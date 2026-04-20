<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    protected $fillable = [
        'tipe_pemasukan', 'supplier', 'no_surat_jalan', 
        'barang_id', 'jumlah', 'satuan_harga', 
        'tanggal_pemasukan', 'keterangan'
    ];

    // Relasi: Pemasukan ini "Milik" sebuah Barang
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barang_id');
    }
}