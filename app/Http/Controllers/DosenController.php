<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;

class DosenController extends Controller
{
    public function show()
    {
        return view('dosen',
            ['listdosen' => Dosen::all()
        ]);
    }
}
