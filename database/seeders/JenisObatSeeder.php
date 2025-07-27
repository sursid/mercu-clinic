<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JenisObat;

class JenisObatSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus data obats dulu agar tidak melanggar foreign key
        \App\Models\Obat::query()->delete();
        \App\Models\JenisObat::query()->delete();
        
        $jenisObats = [
            ['nama' => 'Analgesik', 'deskripsi' => 'Obat penghilang rasa sakit dan pereda nyeri'],
            ['nama' => 'Antibiotik', 'deskripsi' => 'Obat untuk mengatasi infeksi bakteri'],
            ['nama' => 'Antivirus', 'deskripsi' => 'Obat untuk mengatasi infeksi virus'],
            ['nama' => 'Antidiabetik', 'deskripsi' => 'Obat untuk mengendalikan kadar gula darah'],
            ['nama' => 'Antihipertensi', 'deskripsi' => 'Obat penurun tekanan darah tinggi'],
            ['nama' => 'Antihistamin', 'deskripsi' => 'Obat untuk mengatasi alergi'],
            ['nama' => 'Antasida', 'deskripsi' => 'Obat untuk menetralkan asam lambung'],
            ['nama' => 'Antiinflamasi', 'deskripsi' => 'Obat untuk mengurangi peradangan'],
            ['nama' => 'Vitamin', 'deskripsi' => 'Suplemen untuk menjaga kesehatan tubuh'],
            ['nama' => 'Antilipid', 'deskripsi' => 'Obat penurun kadar kolesterol']
        ];
        
        foreach ($jenisObats as $jenisObat) {
            JenisObat::create($jenisObat);
        }
        
        $this->command->info('Berhasil menambahkan ' . count($jenisObats) . ' data jenis obat!');
    }
}
