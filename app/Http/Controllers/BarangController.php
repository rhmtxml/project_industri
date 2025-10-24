<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::all();
        return view('barang.index', compact('barangs'));
    }   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'nama_barang' => 'required|string|max:255',
            'merek' => 'required|max:255',
            'harga' => 'required|max:255',
            'stok' => 'required|max:255',
        ],
        [
            'nama_barang.required' => "Nama Barang  tidak boleh kosong!",
            'merek.required' => "Merek Barang tidak boleh kosong!",
            'harga.required' => "Harga Barang  tidak boleh kosong!",
            'stok.required' => "Stok Barang  tidak boleh kosong!",
        ]);

        Barang::create($request->all());

        session()->flash('success', 'Kelas created successfully.');
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barangs = Barang::findOrFail($id);
        return view('barang.show', compact('barangs'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id)
    {
        $barang = Barang::find($id);
        return view('barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'merek' => 'required|string',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
        ],
        [
            'nama_barang.required' => 'Nama barang wajib diisi.',
            'merek.required' => 'Merek wajib diisi.',
            'harga.required' => 'Harga wajib diisi.',
            'stok.required' => 'Stok wajib diisi.',
        ]);

        $barang = Barang::find($id);
        $barang->update($request->all());

        return redirect()->route('barang.index')
                        ->with('success', 'Barang updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barangs = Barang::findOrFail($id);
        $barangs->delete();

        session()->flash('success', 'barang deleted successfully.');
        return redirect()->route('barang.index');
    }
}
