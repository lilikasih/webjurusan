<?php

namespace App\Http\Controllers;

use App\Beasiswa;
use Illuminate\Http\Request;

class BeasiswaController extends Controller
{
    public function show()
    {
        return view('beasiswa', [
            'listbeasiswa' => Beasiswa::all()
        ]);
    }
}
