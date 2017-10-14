<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;

class GaleriController extends Controller
{
    public function show()
    {
        return view('galeri',
            ['listgaleri' => galeri::all()
        ]);
    }
}
