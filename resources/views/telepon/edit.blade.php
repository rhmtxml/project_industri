@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Telepon</div>
                <div class="card-body">
                    <form action="{{ route('telepon.update', $telepon->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label>Nomor</label>
                            <input type="text" class="form-control" name="nomor" placeholder="Nomor" value="{{ $telepon->nomor }}" >
                            @error('nomor')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-grup">
                            <label>Nama Pengguna</label>
                            <select class="form-control" name="id_pengguna">
                                @foreach($pengguna as $data)
                                <option value="{{ $data->id }}"{{ $data->id ==$telepon->id_pengguna ? 'selected' : ''}}>{{ $data->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
