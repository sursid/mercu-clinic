<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PembelianObat extends Model
{
    protected $fillable = [
        'pasien_id',
        'tanggal',
        'keterangan',
        'total',
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}
