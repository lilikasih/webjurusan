<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beasiswa;

class InfoBeasiswaController extends Controller
{
    public function show($id)
    {
        return view('infobeasiswa',[
            'Beasiswa'=>Beasiswa::find($id)
            ]);
    }
}
