@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Data Telepon</div>
                <div class="card-body">
                    <form action="{{ route('murid.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>Nomor</label>
                            <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap">
                            @error('nama_lengkap')
                                <div class="text-danger">{{ $message }}</div>
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
                                <option value="islam">islam</option>
                                <option value="kristen">kristen</option>
                                <option value="hindu">hindu</option>
                                <option value="budha">budha</option>
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
                        <div class="form-grup">
                            <label>Nama Kelas</label>
                            <select class="form-control" name="id_kelas">
                                @foreach($datakelas as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_kelas }}</option>
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
