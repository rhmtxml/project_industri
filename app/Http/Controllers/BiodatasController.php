<?php

namespace App\Http\Controllers;

use App\Models\biodata;

class BiodatasController extends Controller
{
    public function nampil() 
    {
        $biodata = biodata::all();
        return view('biodata', compact('biodata'));
    }
}
