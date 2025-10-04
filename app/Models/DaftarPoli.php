<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DaftarPoli extends Model
{
    protected $table = 'daftar_poli';

    protected $fillable = [
        'id_pasien',
        'id_jadwal',
        'keluhan',
        'no_antrian'
    ];

    public function pasien(){
        return $this->belongsTo(user::class, 'id_pasien');
    }
    public function jadwalPeriksa(){
        return $this->hasMany(JadwalPeriksa::class, 'id_jadwal');
    }
    public function periksas(){
        return $this->hasMany(Periksa::class, 'id_daftar_poli');
    }
}
