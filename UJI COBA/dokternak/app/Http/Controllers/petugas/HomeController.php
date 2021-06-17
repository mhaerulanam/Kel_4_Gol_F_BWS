<?php

namespace App\Http\Controllers\petugas;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\artikel;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {

        $data = [
            'artikel' => Artikel::orderBy('tanggal', 'desc')->paginate(2),
        ];
        return view('petugas.home',compact('data'));

    }

}
