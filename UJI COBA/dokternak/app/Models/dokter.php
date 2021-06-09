<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'dokter';
    protected $primaryKey = 'id_dokter';
    protected $fillable = [
        'id_dokter', 'nama', 'email', 'jenis_kelamin', 'alamat','tempat', 'telpon', 'foto', 'sertifikasi','id_jabatan','jadwal_kerja','username','password','verifikasi','failed_at',
    ];
}
