<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelass = Kelas::all();
        return view('kelas.index', compact('kelass'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required|string|max:255'
        ],
        [
            'nama_kelas.required' => "Nama Kelas tidak boleh kosong!"
        ]);

        Kelas::create([
            'nama_kelas' => $request->nama_kelas
        ]);

        session()->flash('success', 'Kelas created successfully.');
        return redirect()->route('kelas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kelass = Kelas::findOrFail($id);
        return view('kelas.show', compact('kelass'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kelass = Kelas::findOrFail($id);
        return view('kelas.edit', compact('kelass'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_kelas' => 'required|string|max:255'
        ],
        [
            'nama_kelas.required' => "Nama kelas tidak boleh kosong!"
        ]);

        $kelass = Kelas::findOrFail($id);
        $kelass->update([
            'nama_kelas' => $request->nama_kelas
        ]);

        session()->flash('success', 'Kelas updated successfully.');
        return redirect()->route('kelas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kelass = Kelas::findOrFail($id);
        $kelass->delete();

        session()->flash('success', 'kelas deleted successfully.');
        return redirect()->route('kelas.index');
    }
}
