<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sarana;


class InfoSaranaController extends Controller
{
    public function show($id)
    {
        return view('sarana',[
            'sarana'=>Sarana::find($id)
        ]);
    }
}
