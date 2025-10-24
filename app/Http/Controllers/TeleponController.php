<?php

namespace App\Http\Controllers;
use App\Models\Telepon;
use App\Models\Pengguna;

use Illuminate\Http\Request;

class TeleponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $telepon = Telepon::all();
        return view('telepon.index', compact('datatelepon'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datapengguna = Pengguna::all();
        return view('telepon.create', compact('datapengguna'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomor' => 'required|string|max:15',

            'id_pengguna' => 'required|integer|exists:penggunas,id'
        ],
        [
            'nomor.required' => "Nomor telepon tidak boleh kosong!",
            'id_pengguna.required' => "Id Pengguna tidak boleh kosong!"
        ]);

        $telepon              = new Telepon;
        $telepon->nomor       = $request->nomor;
        $telepon->id_pengguna = $request->id_pengguna;

        $telepon->save();

        session()->flash('suc**cess', 'Telepon created successfully.');

        return redirect()->route('telepon.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $telepons = Telepon::findOrFail($id);
        return view('telepon.show', compact('telepons'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $datatelepon = Telepon::findOrFail($id);
        $datapengguna = Pengguna::all();
        return view('telepon.edit', compact('datatelepon', 'datapengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nomor' => 'required|string|max:15'
        ],
        [
            'nomor.required' => "Nomor telepon tidak boleh kosong!"
        ]);
        
        $telepon                = Telepon::findOrFail($id);
        $telepon->nomor         = $request->nomor;
        $telepon->id_pengguna   = $request->id_pengguna;
        $telepon->save();

        session()->flash('success', 'Telepon updated successfully.');
        return redirect()->route('telepon.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $telepons = Telepon::findOrFail($id);
        $telepons->delete();

        session()->flash('success', 'Telepon deleted successfully.');
        return redirect()->route('telepon.index');
    }
}