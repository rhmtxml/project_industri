<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembeli;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembelis = Pembeli::all();
        return view('pembeli.index', compact('pembelis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pembeli.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pembeli' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:255',
            'telepon' => 'required|max:255',
        ],
        [
            'nama_pembeli.required' => "Nama  tidak boleh kosong!",
            'jenis_kelamin.required' => "Jenis Kelamin tidak boleh kosong!",
            'telepon.required' => "Nomor tidak boleh kosong!",
        ]);

        Pembeli::create($request->all());

        session()->flash('success', 'pembeli created successfully.');
        return redirect()->route('pembeli.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pembelis = Pembeli::findOrFail($id);
        return view('pembeli.show', compact('pembelis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pembeli = Pembeli::find($id);
        return view('pembeli.edit', compact('pembeli'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_pembeli' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string',
            'telepon' => 'required|string',
        ],
        [
            'nama_pembeli.required' => 'Nama pembeli wajib diisi.',
            'jenis_kelamin.required' => 'jenis kelamin wajib diisi.',
            'telepon.required' => 'nomor wajib diisi.',
        ]);

        $pembeli = Pembeli::find($id);
        $pembeli->update($request->all());

        return redirect()->route('pembeli.index')
                        ->with('success', 'pembeli updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pembelis = Pembeli::findOrFail($id);
        $pembelis->delete();

        session()->flash('success', 'barang deleted successfully.');
        return redirect()->route('pembeli.index');
    }
}
