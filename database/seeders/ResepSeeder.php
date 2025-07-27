<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Resep;
use App\Models\Pasien;
use App\Models\User;
use Carbon\Carbon;

class ResepSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Resep::query()->delete();
        
        // Dapatkan ID dari semua pasien yang ada
        $pasienIds = Pasien::pluck('id')->toArray();
        
        // Dapatkan ID dari semua dokter (user dengan role dokter)
        $dokterIds = User::where('role', 'dokter')->pluck('id')->toArray();
        // Jika tidak ada dokter, buat user dokter dummy
        if (empty($dokterIds)) {
            $dokter = User::create([
                'name' => 'Dokter Default',
                'email' => 'dokter@dummy.com',
                'password' => bcrypt('password'),
                'role' => 'dokter',
            ]);
            $dokterIds = [$dokter->id];
        }
        
        $reseps = [
            [
                'pasien_id' => $pasienIds[0] ?? 1,
                'dokter_id' => $dokterIds[array_rand($dokterIds)],
                'tanggal' => Carbon::now()->subDays(10)->format('Y-m-d'),
                'diagnosa' => 'Demam dan Sakit Kepala',
                'instruksi' => 'Minum obat 3x sehari setelah makan',
            ],
            [
                'pasien_id' => $pasienIds[1] ?? 2,
                'dokter_id' => $dokterIds[array_rand($dokterIds)],
                'tanggal' => Carbon::now()->subDays(8)->format('Y-m-d'),
                'diagnosa' => 'Diabetes Tipe 2',
                'instruksi' => 'Minum obat 2x sehari, pagi dan malam',
            ],
            [
                'pasien_id' => $pasienIds[2] ?? 3,
                'dokter_id' => $dokterIds[array_rand($dokterIds)],
                'tanggal' => Carbon::now()->subDays(7)->format('Y-m-d'),
                'diagnosa' => 'Asma Bronkial',
                'instruksi' => 'Gunakan inhaler sesuai kebutuhan, maksimal 3x sehari',
            ],
            [
                'pasien_id' => $pasienIds[4] ?? 5,
                'dokter_id' => $dokterIds[array_rand($dokterIds)],
                'tanggal' => Carbon::now()->subDays(5)->format('Y-m-d'),
                'diagnosa' => 'Alergi Rhinitis',
                'instruksi' => 'Minum antihistamin 1x sehari di malam hari',
            ],
            [
                'pasien_id' => $pasienIds[5] ?? 6,
                'dokter_id' => $dokterIds[array_rand($dokterIds)],
                'tanggal' => Carbon::now()->subDays(3)->format('Y-m-d'),
                'diagnosa' => 'Migrain',
                'instruksi' => 'Minum obat saat gejala muncul, istirahat di ruangan gelap',
            ],
            [
                'pasien_id' => $pasienIds[6] ?? 7,
                'dokter_id' => $dokterIds[array_rand($dokterIds)],
                'tanggal' => Carbon::now()->subDays(2)->format('Y-m-d'),
                'diagnosa' => 'Hiperkolesterolemia',
                'instruksi' => 'Minum obat setiap malam sebelum tidur',
            ],
            [
                'pasien_id' => $pasienIds[8] ?? 9,
                'dokter_id' => $dokterIds[array_rand($dokterIds)],
                'tanggal' => Carbon::now()->subDay()->format('Y-m-d'),
                'diagnosa' => 'Gastritis Akut',
                'instruksi' => 'Minum obat 30 menit sebelum makan, hindari makanan pedas',
            ],
            [
                'pasien_id' => $pasienIds[9] ?? 10,
                'dokter_id' => $dokterIds[array_rand($dokterIds)],
                'tanggal' => Carbon::now()->format('Y-m-d'),
                'diagnosa' => 'Anemia Defisiensi Besi',
                'instruksi' => 'Minum suplemen zat besi 1x sehari setelah makan',
            ]
        ];
        
        foreach ($reseps as $resep) {
            Resep::create($resep);
        }
        
        $this->command->info('Berhasil menambahkan ' . count($reseps) . ' data resep!');
    }
}
