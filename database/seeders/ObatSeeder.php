<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Obat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Obat::query()->delete();
        
        // Array data obat untuk seeding
        $obats = [
            [
                'nama' => 'Paracetamol 500mg',
                'jenis' => 'Analgesik',
                'deskripsi' => 'Obat pereda nyeri dan penurun demam yang efektif untuk mengatasi sakit kepala, sakit gigi, nyeri otot, dan demam. Aman digunakan untuk semua usia dengan dosis yang sesuai.',
                'stok' => 150,
                'image' => 'assets/medicines/paracetamol.jpg',
            ],
            [
                'nama' => 'Amoxicillin 500mg',
                'jenis' => 'Antibiotik',
                'deskripsi' => 'Antibiotik spektrum luas untuk mengatasi infeksi bakteri pada saluran pernapasan, saluran kemih, telinga, kulit, dan jaringan lunak lainnya. Harus diminum hingga habis sesuai petunjuk dokter.',
                'stok' => 85,
                'image' => 'assets/medicines/amoxicillin.jpg',
            ],
            [
                'nama' => 'Omeprazole 20mg',
                'jenis' => 'Antasida',
                'deskripsi' => 'Obat untuk mengurangi produksi asam lambung berlebih, mengatasi gejala maag, GERD, dan gangguan pencernaan lainnya. Diminum sebelum makan untuk hasil yang optimal.',
                'stok' => 120,
                'image' => 'assets/medicines/omeprazole.jpg',
            ],
            [
                'nama' => 'Cetirizine 10mg',
                'jenis' => 'Antihistamin',
                'deskripsi' => 'Antihistamin generasi kedua untuk meredakan gejala alergi seperti bersin-bersin, gatal, hidung tersumbat, dan ruam kulit. Tidak menyebabkan kantuk berlebih.',
                'stok' => 95,
                'image' => 'assets/medicines/cetirizine.jpg',
            ],
            [
                'nama' => 'Ibuprofen 400mg',
                'jenis' => 'Analgesik',
                'deskripsi' => 'Obat anti-inflamasi non-steroid (NSAID) yang efektif untuk meredakan nyeri, peradangan, dan menurunkan demam. Bekerja dengan menghambat produksi prostaglandin.',
                'stok' => 110,
                'image' => 'assets/medicines/ibuprofen.jpg',
            ],
            [
                'nama' => 'Vitamin C 1000mg',
                'jenis' => 'Vitamin',
                'deskripsi' => 'Suplemen vitamin C dosis tinggi untuk meningkatkan daya tahan tubuh, membantu penyerapan zat besi, dan menjaga kesehatan kulit. Dengan tambahan bioflavonoid untuk penyerapan lebih baik.',
                'stok' => 200,
                'image' => 'assets/medicines/vitamin_c.jpg',
            ],
            [
                'nama' => 'Metformin 500mg',
                'jenis' => 'Antidiabetik',
                'deskripsi' => 'Obat antidiabetes untuk mengendalikan kadar gula darah pada pasien diabetes tipe 2. Bekerja dengan mengurangi produksi glukosa oleh hati dan meningkatkan sensitivitas insulin.',
                'stok' => 75,
                'image' => 'assets/medicines/metformin.jpg',
            ],
            [
                'nama' => 'Amlodipine 10mg',
                'jenis' => 'Antihipertensi',
                'deskripsi' => 'Obat penurun tekanan darah dari golongan calcium channel blocker. Efektif untuk mengatasi hipertensi dan angina dengan cara melebarkan pembuluh darah.',
                'stok' => 60,
                'image' => 'assets/medicines/amlodipine.jpg',
            ],
            [
                'nama' => 'Loratadine 10mg',
                'jenis' => 'Antihistamin',
                'deskripsi' => 'Antihistamin non-drowsy untuk mengatasi gejala alergi seperti rinitis alergi dan urtikaria. Bekerja dengan memblokir reseptor histamin H1.',
                'stok' => 85,
                'image' => 'assets/medicines/loratadine.jpg',
            ],
            [
                'nama' => 'Simvastatin 20mg',
                'jenis' => 'Antilipid',
                'deskripsi' => 'Obat penurun kolesterol dari golongan statin. Bekerja dengan menghambat enzim HMG-CoA reductase untuk menurunkan produksi kolesterol di hati.',
                'stok' => 50,
                'image' => 'assets/medicines/simvastatin.jpg',
            ]
        ];
        
        // Buat folder untuk gambar obat jika belum ada
        if (!file_exists(public_path('assets/medicines'))) {
            mkdir(public_path('assets/medicines'), 0755, true);
        }
        
        // Seed data obat
        foreach ($obats as $obat) {
            // Cek apakah file gambar sudah ada
            $imagePath = public_path($obat['image']);
            $pathInfo = pathinfo($imagePath);
            
            // Buat direktori jika belum ada
            if (!file_exists($pathInfo['dirname'])) {
                mkdir($pathInfo['dirname'], 0755, true);
            }
            
            // Jika file gambar tidak ada, gunakan gambar placeholder
            if (!file_exists($imagePath)) {
                // Buat file placeholder sederhana
                $obat['image'] = null; // Set null untuk menampilkan placeholder di view
            }
            
            Obat::create($obat);
        }
        
        // Output informasi
        $this->command->info('Berhasil menambahkan ' . count($obats) . ' data obat!');
    }
}
