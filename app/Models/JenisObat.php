<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisObat extends Model
{
    protected $fillable = [
        'nama',
        'deskripsi',
    ];

    public function obats()
    {
        return $this->hasMany(Obat::class);
    }
}
