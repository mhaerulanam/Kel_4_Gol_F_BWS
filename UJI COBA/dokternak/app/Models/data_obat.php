<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_obat extends Model
{
    protected $table = 'data_obat';
    protected $primarykey = 'id_obat';
    protected $fillable = [
        '','nama_obat','stok','supplier','expired','keterangan',
    ];
}
