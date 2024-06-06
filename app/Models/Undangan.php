<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Undangan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pengantin_pria',
        'nama_pengantin_pria_lengkap',
        'nama_ortu_pria',

        'nama_pengantin_wanita',
        'nama_pengantin_wanita_lengkap',
        'nama_ortu_wanita',

        'foto_pengantin_pria',
        'foto_pengantin_wanita',
        'background_foto',
        'background_foto_kedua',
        'tanggal_pernikahan',

        'lokasi_pernikahan_lat',
        'lokasi_pernikahan_lng',

        'jam_resepsi',
        'nama_jalan',
    ];

    public function getFotoPengantinPriaUrlAttribute()
    {
        return $this->foto_pengantin_pria ? asset('storage/' . $this->foto_pengantin_pria) : null;
    }

    public function getFotoPengantinWanitaUrlAttribute()
    {
        return $this->foto_pengantin_wanita ? asset('storage/' . $this->foto_pengantin_wanita) : null;
    }

    public function getBackgroundFotoUrlAttribute()
    {
        return $this->background_foto ? asset('storage/' . $this->background_foto) : null;
    }

    public function getBackgroundFotoKeduaUrlAttribute()
    {
        return $this->background_foto_kedua ? asset('storage/' . $this->background_foto_kedua) : null;
    }
}
