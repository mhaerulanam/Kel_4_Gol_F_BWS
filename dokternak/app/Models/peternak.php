<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peternak extends Model
{
    protected $table = 'peternak';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama', 'username', 'email', 'password', 'alamat',
    ];
}
