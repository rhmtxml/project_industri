@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Data Murid</div>
                <div class="card-body">
                    <div class="mb-3">
                        <div class="mb-3">
                            <label>Nama Murid</label>
                            <input type="text" class="form-control" name="nama_lengkap" value="{{ $murid->nama_lengkap }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jenis_kelamin" value="{{ $murid->jenis_kelamin }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Tanggal Lahir</label>
                            <input type="text" class="form-control" name="tanggal_lahir" value="{{ $murid->tanggal_lahir }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" value="{{ $murid->tempat_lahir }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Agama</label>
                            <input type="text" class="form-control" name="agama" value="{{ $murid->agama }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="{{ $murid->alamat }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" value="{{ $murid->email }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Nama Kelas</label>
                            <input type="text" class="form-control" name="kelas" value="{{ $murid->kelas->nama_kelas }}" disabled>
                        </div>
                        <div class="mb-3">
                        <a href="{{ route('murid.index') }}" class="btn btn-outline-primary">Back</a>
                        </div>
            </div>
        </div>
    </div>
</div>
@endsection