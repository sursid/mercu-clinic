<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pasien;
use Illuminate\Support\Facades\Hash;

class PasienSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Pasien::query()->delete();

        $pasiens = [
            [
                'nama' => 'Ahmad Fauzi',
                'nik' => '3171061203850003',
                'alamat' => 'Jl. Kebon Jeruk No. 15, Jakarta Barat',
                'tanggal_lahir' => '1985-03-12',
                'jenis_kelamin' => 'L',
                'telepon' => '081234567890',
                'email' => 'ahmad.fauzi@gmail.com',
                'no_ktp' => '3171061203850003',
                'riwayat_penyakit' => 'Hipertensi',
            ],
            [
                'nama' => 'Siti Aminah',
                'nik' => '3171062507900005',
                'alamat' => 'Jl. Meruya Selatan No. 22, Jakarta Barat',
                'tanggal_lahir' => '1990-07-25',
                'jenis_kelamin' => 'P',
                'telepon' => '082145678901',
                'email' => 'siti.aminah@gmail.com',
                'no_ktp' => '3171062507900005',
                'riwayat_penyakit' => 'Diabetes',
            ],
            [
                'nama' => 'Budi Santoso',
                'nik' => '3171060811780004',
                'alamat' => 'Jl. Kembangan Raya No. 5, Jakarta Barat',
                'tanggal_lahir' => '1978-11-08',
                'jenis_kelamin' => 'L',
                'telepon' => '083156789012',
                'email' => 'budi.santoso@gmail.com',
                'no_ktp' => '3171060811780004',
                'riwayat_penyakit' => 'Asma',
            ],
            [
                'nama' => 'Dewi Lestari',
                'nik' => '3171061705950008',
                'alamat' => 'Jl. Kedoya Raya No. 30, Jakarta Barat',
                'tanggal_lahir' => '1995-05-17',
                'jenis_kelamin' => 'P',
                'telepon' => '084167890123',
                'email' => 'dewi.lestari@gmail.com',
                'no_ktp' => '3171061705950008',
                'riwayat_penyakit' => null,
            ],
            [
                'nama' => 'Eko Prasetyo',
                'nik' => '3171063009820001',
                'alamat' => 'Jl. Panjang No. 45, Jakarta Barat',
                'tanggal_lahir' => '1982-09-30',
                'jenis_kelamin' => 'L',
                'telepon' => '085178901234',
                'email' => 'eko.prasetyo@gmail.com',
                'no_ktp' => '3171063009820001',
                'riwayat_penyakit' => 'Alergi Debu',
            ],
            [
                'nama' => 'Rina Wulandari',
                'nik' => '3171060312930007',
                'alamat' => 'Jl. Rawa Belong No. 12, Jakarta Barat',
                'tanggal_lahir' => '1993-12-03',
                'jenis_kelamin' => 'P',
                'telepon' => '086189012345',
                'email' => 'rina.wulandari@gmail.com',
                'no_ktp' => '3171060312930007',
                'riwayat_penyakit' => 'Migrain',
            ],
            [
                'nama' => 'Hendra Wijaya',
                'nik' => '3171062006750006',
                'alamat' => 'Jl. Tanjung Duren No. 25, Jakarta Barat',
                'tanggal_lahir' => '1975-06-20',
                'jenis_kelamin' => 'L',
                'telepon' => '087190123456',
                'email' => 'hendra.wijaya@gmail.com',
                'no_ktp' => '3171062006750006',
                'riwayat_penyakit' => 'Kolesterol Tinggi',
            ],
            [
                'nama' => 'Maya Sari',
                'nik' => '3171061502880009',
                'alamat' => 'Jl. Tomang Raya No. 8, Jakarta Barat',
                'tanggal_lahir' => '1988-02-15',
                'jenis_kelamin' => 'P',
                'telepon' => '088201234567',
                'email' => 'maya.sari@gmail.com',
                'no_ktp' => '3171061502880009',
                'riwayat_penyakit' => null,
            ],
            [
                'nama' => 'Dodi Setiawan',
                'nik' => '3171062804800002',
                'alamat' => 'Jl. Grogol Utara No. 17, Jakarta Barat',
                'tanggal_lahir' => '1980-04-28',
                'jenis_kelamin' => 'L',
                'telepon' => '089212345678',
                'email' => 'dodi.setiawan@gmail.com',
                'no_ktp' => '3171062804800002',
                'riwayat_penyakit' => 'Gastritis',
            ],
            [
                'nama' => 'Anisa Putri',
                'nik' => '3171060510980004',
                'alamat' => 'Jl. S. Parman No. 40, Jakarta Barat',
                'tanggal_lahir' => '1998-10-05',
                'jenis_kelamin' => 'P',
                'telepon' => '082312345678',
                'email' => 'anisa.putri@gmail.com',
                'no_ktp' => '3171060510980004',
                'riwayat_penyakit' => 'Anemia',
            ]
        ];

        foreach ($pasiens as $pasien) {
            Pasien::create($pasien);
        }

        $this->command->info('Berhasil menambahkan ' . count($pasiens) . ' data pasien!');
    }
}
