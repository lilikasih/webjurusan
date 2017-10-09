<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class InfoBeritaController extends Controller
{
    public function show($id)
    {
        return view('berita',[
            'berita'=>Berita::find($id)
        ]);
    }
}
