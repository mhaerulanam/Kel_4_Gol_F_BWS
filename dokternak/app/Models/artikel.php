<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_artikel', 'id_ktg', 'tanggal', 'name_penulis','judul', 'isi', 'gambar', 'sumber',
    ];
}
