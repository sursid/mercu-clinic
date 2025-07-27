<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PembelianObat;
use App\Models\Pasien;
use App\Models\Obat;
use App\Models\Resep;
use Carbon\Carbon;

class PembelianObatSeeder extends Seeder
{
    public function run(): void
    {
        PembelianObat::query()->delete();
        
        // Dapatkan ID dari semua pasien yang ada
        $pasienIds = Pasien::pluck('id')->toArray();
        
        // Dapatkan ID dari semua obat yang ada
        $obatIds = Obat::pluck('id')->toArray();
        
        // Dapatkan ID dari semua resep yang ada
        $resepIds = Resep::pluck('id')->toArray();
        
        $pembelians = [
            [
                'pasien_id' => $pasienIds[0] ?? 1,
                'obat_id' => $obatIds[0] ?? 1, // Paracetamol
                'resep_id' => $resepIds[0] ?? null,
                'jumlah' => 2,
                'harga_satuan' => 10000,
                'total_harga' => 20000,
                'tanggal' => Carbon::now()->subDays(10)->format('Y-m-d'),
                'status' => 'lunas',
            ],
            [
                'pasien_id' => $pasienIds[1] ?? 2,
                'obat_id' => $obatIds[6] ?? 7, // Metformin
                'resep_id' => $resepIds[1] ?? null,
                'jumlah' => 3,
                'harga_satuan' => 15000,
                'total_harga' => 45000,
                'tanggal' => Carbon::now()->subDays(8)->format('Y-m-d'),
                'status' => 'lunas',
            ],
            [
                'pasien_id' => $pasienIds[2] ?? 3,
                'obat_id' => $obatIds[3] ?? 4, // Cetirizine
                'resep_id' => $resepIds[2] ?? null,
                'jumlah' => 1,
                'harga_satuan' => 12000,
                'total_harga' => 12000,
                'tanggal' => Carbon::now()->subDays(7)->format('Y-m-d'),
                'status' => 'lunas',
            ],
            [
                'pasien_id' => $pasienIds[3] ?? 4,
                'obat_id' => $obatIds[5] ?? 6, // Vitamin C
                'resep_id' => null,
                'jumlah' => 5,
                'harga_satuan' => 25000,
                'total_harga' => 125000,
                'tanggal' => Carbon::now()->subDays(6)->format('Y-m-d'),
                'status' => 'lunas',
            ],
            [
                'pasien_id' => $pasienIds[4] ?? 5,
                'obat_id' => $obatIds[3] ?? 4, // Cetirizine
                'resep_id' => $resepIds[3] ?? null,
                'jumlah' => 2,
                'harga_satuan' => 12000,
                'total_harga' => 24000,
                'tanggal' => Carbon::now()->subDays(5)->format('Y-m-d'),
                'status' => 'lunas',
            ],
            [
                'pasien_id' => $pasienIds[5] ?? 6,
                'obat_id' => $obatIds[4] ?? 5, // Ibuprofen
                'resep_id' => $resepIds[4] ?? null,
                'jumlah' => 2,
                'harga_satuan' => 8000,
                'total_harga' => 16000,
                'tanggal' => Carbon::now()->subDays(3)->format('Y-m-d'),
                'status' => 'lunas',
            ],
            [
                'pasien_id' => $pasienIds[6] ?? 7,
                'obat_id' => $obatIds[9] ?? 10, // Simvastatin
                'resep_id' => $resepIds[5] ?? null,
                'jumlah' => 1,
                'harga_satuan' => 30000,
                'total_harga' => 30000,
                'tanggal' => Carbon::now()->subDays(2)->format('Y-m-d'),
                'status' => 'lunas',
            ],
            [
                'pasien_id' => $pasienIds[7] ?? 8,
                'obat_id' => $obatIds[5] ?? 6, // Vitamin C
                'resep_id' => null,
                'jumlah' => 2,
                'harga_satuan' => 25000,
                'total_harga' => 50000,
                'tanggal' => Carbon::now()->subDays(2)->format('Y-m-d'),
                'status' => 'lunas',
            ],
            [
                'pasien_id' => $pasienIds[8] ?? 9,
                'obat_id' => $obatIds[2] ?? 3, // Omeprazole
                'resep_id' => $resepIds[6] ?? null,
                'jumlah' => 2,
                'harga_satuan' => 18000,
                'total_harga' => 36000,
                'tanggal' => Carbon::now()->subDay()->format('Y-m-d'),
                'status' => 'lunas',
            ],
            [
                'pasien_id' => $pasienIds[9] ?? 10,
                'obat_id' => $obatIds[5] ?? 6, // Vitamin C
                'resep_id' => $resepIds[7] ?? null,
                'jumlah' => 3,
                'harga_satuan' => 25000,
                'total_harga' => 75000,
                'tanggal' => Carbon::now()->format('Y-m-d'),
                'status' => 'lunas',
            ],
            [
                'pasien_id' => $pasienIds[1] ?? 2,
                'obat_id' => $obatIds[1] ?? 2, // Amoxicillin
                'resep_id' => null,
                'jumlah' => 1,
                'harga_satuan' => 20000,
                'total_harga' => 20000,
                'tanggal' => Carbon::now()->format('Y-m-d'),
                'status' => 'lunas',
            ],
            [
                'pasien_id' => $pasienIds[3] ?? 4,
                'obat_id' => $obatIds[0] ?? 1, // Paracetamol
                'resep_id' => null,
                'jumlah' => 1,
                'harga_satuan' => 10000,
                'total_harga' => 10000,
                'tanggal' => Carbon::now()->format('Y-m-d'),
                'status' => 'lunas',
            ]
        ];
        
        foreach ($pembelians as $pembelian) {
            PembelianObat::create($pembelian);
        }
        
        $this->command->info('Berhasil menambahkan ' . count($pembelians) . ' data pembelian obat!');
    }
}
