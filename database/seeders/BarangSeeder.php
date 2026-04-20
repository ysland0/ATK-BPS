<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang; // Panggil model Barang

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $file = fopen(database_path('seeders/ListBarang.csv'), "r");
        fgetcsv($file);
        
        while (($data = fgetcsv($file, 2000, ",")) !== FALSE) {
            $jumlahDariFile = (int)$data[4];

            Barang::create([
                'kode_barang' => $data[1], 
                'nama_barang' => $data[2], 
                'satuan'      => $data[3], 
                'stok'        => $jumlahDariFile,
                'stok_awal'   => $jumlahDariFile, 
            ]);
        }
        fclose($file);
    }
}