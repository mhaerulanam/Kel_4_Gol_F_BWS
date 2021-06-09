<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tutorial extends Model
{
    protected $table = 'tutorial';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_tutorial', 'judul_tutorial', 'isi', 'icon', 
    ];
}
