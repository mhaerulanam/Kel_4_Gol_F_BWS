<?php

namespace App\Http\Controllers\petugas;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ResponKonsultasiController extends Controller
{
    public function index()
    {
        return view('petugas.responkonsultasi');
    }
}
