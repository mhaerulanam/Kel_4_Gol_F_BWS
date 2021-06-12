<?php

namespace App\Http\Controllers\petugas;

use App\Http\Controllers\controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RekammedikController extends Controller
{
    public function index()
    {
        $rekam_medik = DB::table('rekam_medik')->get();
        return view('petugas.rekam_medik.index', compact('rekam_medik'));
    }

}

