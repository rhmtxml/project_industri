<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;

class PenggunaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penggunas = Pengguna::all();
        return view('pengguna.index', compact('penggunas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255'
        ],
        [
            'nama.required' => "Nama tidak boleh kosong!"
        ]);

        Pengguna::create([
            'nama' => $request->nama
        ]);

        session()->flash('success', 'Pengguna created successfully.');
        return redirect()->route('pengguna.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penggunas = Pengguna::findOrFail($id);
        return view('pengguna.show', compact('penggunas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $penggunas = Pengguna::findOrFail($id);
        return view('pengguna.edit', compact('penggunas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255'
        ],
        [
            'nama.required' => "Nama tidak boleh kosong!"
        ]);

        $penggunas = Pengguna::findOrFail($id);
        $penggunas->update([
            'nama' => $request->nama
        ]);

        session()->flash('success', 'Pengguna updated successfully.');
        return redirect()->route('pengguna.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penggunas = Pengguna::findOrFail($id);
        $penggunas->delete();

        session()->flash('success', 'Pengguna deleted successfully.');
        return redirect()->route('pengguna.index');
    }
}