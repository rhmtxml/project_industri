<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Murid;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datamurid = Murid::all();
        return view('murid.index', compact('datamurid'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datakelas = Kelas::all();
        return view('murid.create', compact('datakelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $murid                      = new Murid;
        $murid->nama_lengkap       = $request->nama_lengkap;
        $murid->jenis_kelamin   = $request->jenis_kelamin;
        $murid->tanggal_lahir       = $request->tanggal_lahir;
        $murid->tempat_lahir    = $request->tempat_lahir;
        $murid->agama           = $request->agama;
        $murid->alamat           = $request->alamat;
        $murid->email        = $request->email;
        $murid->id_kelas     = $request->id_kelas;

        $murid->save();

        session()->flash('suc**cess', 'Murid created successfully.');

        return redirect()->route('murid.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $murid = Murid::findOrFail($id);
        $kelas = $murid->kelas;
        return view('murid.show', compact('murid', 'kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $murids = Murid::findOrFail($id);
        return view('murid.edit', compact('murids'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       



        $murids = Murid::findOrFail($id);
        $murids->nama_lengkap = $request->nama_lengkap;
        $murids->jenis_kelamin = $request->jenis_kelamin;
        $murids->tanggal_lahir = $request->tanggal_lahir;
        $murids->tempat_lahir = $request->tempat_lahir;
        $murids->agama = $request->agama;
        $murids->alamat = $request->alamat;
        $murids->email = $request->email;
        $murids->id_kelas = $request->id_kelas;
        $murids->save();
        
        


        session()->flash('success', 'Murid berhasil di update');

        return redirect()->route('murid.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $murids = Murid::findOrFail($id);
        $murids->delete();

        session()->flash('success', 'murid deleted successfully.');
        return redirect()->route('murid.index');
    }
}
