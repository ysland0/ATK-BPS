<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pegawai;

class PegawaiSeeder extends Seeder
{
    public function run(): void
    {
        $file = fopen(database_path('seeders/DataPegawai.csv'), "r");

        fgetcsv($file);

        while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
    
            Pegawai::create([
                'nama' => $data[1], 
            ]);
        }

        fclose($file);
    }
}