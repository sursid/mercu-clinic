<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $fillable = [
        'nama',
        'jenis',
        'deskripsi',
        'stok',
        'image',
    ];

    public function jenisObat()
    {
        return $this->belongsTo(JenisObat::class, 'jenis', 'nama');
    }
}
