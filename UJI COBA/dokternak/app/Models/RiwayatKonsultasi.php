<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatKonsultasi extends Model
{
    protected $table = 'riwayat_konsultasi';
    protected $primaryKey = 'id_riwayat';
    protected $fillable = [
        'id_riwayat', 'id_konsultasi', 'id_respon','id_kategori','id_ktg','id_nama_hewan','keluhan','tanggal',
    ];
}
