<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Penting: import model User
use Illuminate\Support\Facades\Hash; // Penting: import Hash untuk password

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus akun lama jika ada untuk menghindari duplikasi email
        User::where('email', 'admin@bps.com')->delete();

        // Buat akun baru
        User::create([
            'name' => 'Admin BPS',
            'email' => 'admin@bps.com',
            'password' => Hash::make('password123'), // Password: password123
            'email_verified_at' => now(), // Opsional: anggap sudah terverifikasi
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Contoh akun lain (opsional)
        User::create([
            'name' => 'Pegawai BPS',
            'email' => 'pegawai@bps.com',
            'password' => Hash::make('rahasia456'), // Password: rahasia456
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->command->info('Akun default berhasil dibuat!');
    }
}