<?php

namespace App\Http\Controllers;

use App\Models\Industri;
use Illuminate\Http\Request;

class IndustriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $industri = Industri::all();
        return view('industri', compact('industri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $request->validate([
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'alamat' => 'required',
        ]);

        Data::create($request->all());

        return redirect('/data')->with('success', 'Data berhasil ditambahkan.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Industri $industri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Industri $industri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Industri $industri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Industri $industri)
    {
        //
    }
}
