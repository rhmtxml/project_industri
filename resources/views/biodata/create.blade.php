@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Data Biodata</div>

                <div class="card-body">
                    
                    <form action="{{ route('biodata.store') }}" method="post" entype="multipart/form-data" >
                    @csrf    
                    <div class="mb-3">
                            <label">Nama Lengkap</label>   
                            <input type="text" class="form-control" name="nama_lengkap" placeholder="nama_lengkap">
                            @error('nama_lengkap')
                            <small style="color:red;">{{ $message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Jenis Kelamin</label><br>
                            <input type="radio" name="jenis_kelamin" value="laki-laki">Laki laki
                            <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan<br>

                            @error('jenis_kelamin')
                            <small style="color:red;">{{ $message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label">tanggal lahir</label>   
                            <input type="date" class="form-control" name="tanggal_lahir" placeholder="tanggal_lahir">
                            @error('tanggal_lahir')
                            <small style="color:red;">{{ $message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>tempat lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" placeholder="tempat_lahir">
                            @error('tempat_lahir')
                            <small style="color:red;">{{ $message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label">Agama</label>
                            <select name="agama" class="form-control">
                                <option disabled     selected >pilih agama</option>
                                <option value="agama">islam</option>
                                <option value="agama">kristen</option>
                                <option value="agama">hindu</option>
                                <option value="agama">budha</option>
                            </select>
                            @error('agama')
                            <small style="color:red;">{{ $message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Alamat</label>
                            <textarea name="alamat" rows="1" class="form-control" placeholder="alamat"></textarea>
                            @error('alamat')
                            <small style="color:red;">{{ $message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label">Telepon</label>   
                            <input type="text" class="form-control" name="telepon" placeholder="telepon">
                            @error('telepon')
                            <small style="color:red;">{{ $message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" placeholder="email">
                            @error('email')
                            <small style="color:red;">{{ $message}}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
