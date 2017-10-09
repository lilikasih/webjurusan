<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class BeritaController extends Controller
{
    public function show()
    {
        return view('beranda', [
            'ketberita' => berita::all()
        ]);
    }
}
