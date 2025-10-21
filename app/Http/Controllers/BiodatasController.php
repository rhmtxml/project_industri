<?php

namespace App\Http\Controllers;

use App\Models\biodata;
use Illuminate\Http\Request;

class BiodatasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biodatas = biodata::all();

        return view('biodata.index', compact('biodatas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("biodata.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_lengkap' => 'required|string|max:255',
                'jenis_kelamin' => 'required|string|max:255',
                'tanggal_lahir' => 'required|string|max:255',
                'tempat_lahir' => 'required|string|max:255',
                'agama' => 'required|string|max:255',
                'alamat' => 'required|string|max:255',
                'telepon' => 'required|string|max:255',
                'email' => 'required|string|max:255',

            ],
            [
                'nama_lengkap.required' => 'nama ga boleh kosong!!',
                'jenis_kelamin.required' => 'jenis kelamin ga boleh kosong!!',
                'tanggal_lahir.required' => 'tanggal lahir ga boleh kosong!!',
                'tempat_lahir.required' => 'tempat lahir ga boleh kosong!!',
                'agama.required' => 'agama ga boleh kosong!!',
                'alamat.required' => 'alamat ga boleh kosong!!',
                'telepon.required' => 'no telepon ga boleh kosong!!',
                'email.required' => 'email   ga boleh kosong!!',


            ]);



        $biodatas = new biodata;
        $biodatas -> nama_lengkap = $request->nama_lengkap;
        $biodatas -> jenis_kelamin = $request->jenis_kelamin;
        $biodatas -> tanggal_lahir = $request->tanggal_lahir;
        $biodatas -> tempat_lahir = $request->tempat_lahir;
        $biodatas -> agama = $request->agama;
        $biodatas -> alamat = $request->alamat;
        $biodatas -> telepon = $request->telepon;
        $biodatas -> email = $request->email;

        $biodatas->save();

        session()->flash('success', 'Data berhasil di tambahkan');

        return redirect()->route('biodata.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $biodatas = biodata::findOrFail($id);
        return view('biodata.show', compact('biodatas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        




        $biodatas = biodata::findOrFail($id);
        return view('biodata.edit', compact('biodatas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nama_lengkap' => 'required|string|max:255',
                'jenis_kelamin' => 'required|string|max:255',
                'tanggal_lahir' => 'required|string|max:255',
                'tempat_lahir' => 'required|string|max:255',
                'agama' => 'required|string|max:255',
                'alamat' => 'required|string|max:255',
                'telepon' => 'required|string|max:255',
                'email' => 'required|string|max:255',

            ],
            [
                'nama_lengkap.required' => 'nama ga boleh kosong!!',
                'jenis_kelamin.required' => 'jenis kelamin ga boleh kosong!!',
                'tanggal_lahir.required' => 'tanggal lahir ga boleh kosong!!',
                'tempat_lahir.required' => 'tempat lahir ga boleh kosong!!',
                'agama.required' => 'agama ga boleh kosong!!',
                'alamat.required' => 'alamat ga boleh kosong!!',
                'telepon.required' => 'no telepon ga boleh kosong!!',
                'email.required' => 'email   ga boleh kosong!!',


            ]);



        $biodatas = biodata::findOrFail($id);
        $biodatas->nama_lengkap = $request->nama_lengkap;
        $biodatas->jenis_kelamin = $request->jenis_kelamin;
        $biodatas->tanggal_lahir = $request->tanggal_lahir;
        $biodatas->tempat_lahir = $request->tempat_lahir;
        $biodatas->agama = $request->agama;
        $biodatas->alamat = $request->alamat;
        $biodatas->telepon = $request->telepon;
        $biodatas->email = $request->email;
        $biodatas->save();
        

        session()->flash('success', 'Data berhasil di update');

        return redirect()->route('biodata.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $biodatas = biodata::findOrFail($id);
        $biodatas->delete();
        return redirect()->route('biodata.index')->with('success', 'data berhasil di hapus');
    }
}
