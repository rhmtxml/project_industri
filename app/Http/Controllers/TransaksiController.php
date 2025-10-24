<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Pembeli;
use App\Models\Transaksi;



use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $barang = Barang::all();
        $pembeli = Pembeli::all();
        return view('transaksi.create', compact('barang','pembeli'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'tanggal_transaksi' => 'required|string|max:15',
        //     'jumlah' => 'required|string|max:15',
        //     'total_harga' => 'required|string|max:15',
        //     'id_pembeli' => 'required|integer|exists:pembelis,id',
        //     'id_barang' => 'required|integer|exists:barangs,id',
        // ],
        // [
        //     'nomor.required' => "Nomor telepon tidak boleh kosong!",
        //     'id_pengguna.required' => "Id Pengguna tidak boleh kosong!"
        // ]);

        $transaksi              = new Transaksi;
        $transaksi->tanggal_transaksi       = $request->tanggal_transaksi;
        $transaksi->jumlah       = $request->jumlah;
        $transaksi->total_harga       = $request->total_harga;
        $transaksi->id_pembeli = $request->id_pembeli;
        $transaksi->id_barang = $request->id_barang;

        $transaksi->save();

        session()->flash('suc**cess', 'transaksi created successfully.');

        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $pembeli = pembeli::all();
        $barang = Barang::all();
        return view('transaksi.edit', compact('transaksi','pembeli','barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       


        $transaksi = Transaksi::findOrFail($id);
        $transaksi->update($request->all());


        session()->flash('success', 'transaksi updated successfully.');
        return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();

        session()->flash('success', 'transaksi deleted successfully.');
        return redirect()->route('transaksi.index');
    }
}
