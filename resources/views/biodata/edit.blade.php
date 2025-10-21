@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data biodata</div>

                <div class="card-body">
                    <form action="{{ route('biodata.update', $biodatas->id) }}" method="post" entype="multipart/form-data">
                    @csrf    
                    @method('PUT')
                    <div class="mb-3">
                            <label">nama_lengkap</label>  
                            <input type="text" class="form-control" name="nama_lengkap" value="{{ $biodatas-> nama_lengkap}}">
                            @error('nama_lengkap')
                            <small style="color:red;">{{ $message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>jenis_kelamin</label> <br>
                            <input type="radio" name="jenis_kelamin" value="laki-laki">Laki laki
                            <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan<br>

                            @error('jenis_kelamin')
                            <small style="color:red;">{{ $message}}</small>
                            @enderror
                        </div>
                    <div class="mb-3">
                            <label">tanggal_lahir</label>  
                            <input type="date" class="form-control" name="tanggal_lahir" value="{{ $biodatas-> tanggal_lahir}}">
                            @error('tanggal_lahir')
                            <small style="color:red;">{{ $message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>tempat_lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" value="{{ $biodatas-> tempat_lahir}}">
                            @error('tempat_lahir')
                            <small style="color:red;">{{ $message}}</small>
                            @enderror
                        </div>
                    <div class="mb-3">
                            <label">agama</label>
                            <input type="text" class="form-control" name="agama" value="{{ $biodatas-> agama}}">
                            @error('agama')
                            <small style="color:red;">{{ $message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>alamat</label>
                            <input type="text" class="form-control" name="alamat" value="{{ $biodatas-> alamat}}">
                            @error('alamat')
                            <small style="color:red;">{{ $message}}</small>
                            @enderror
                        </div>
                    <div class="mb-3">
                            <label">telepon</label>  
                            <input type="text" class="form-control" name="telepon" value="{{ $biodatas-> telepon}}">
                            @error('telepon')
                            <small style="color:red;">{{ $message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>email</label>
                            <input type="text" class="form-control" name="email" value="{{ $biodatas-> email}}">
                            @error('email')
                            <small style="color:red;">{{ $message}}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
