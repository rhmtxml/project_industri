@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <div class="card">
                <div class="card-header">Show Data barang</div>
                <div class="card-body">
                        <div class="mb-3">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" value="{{ $barangs->nama_barang }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Merek</label>
                            <input type="text" class="form-control" name="nama_barang" value="{{ $barangs->merek }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Harga</label>
                            <input type="text" class="form-control" name="nama_barang" value="{{ $barangs->harga }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Stok</label>
                            <input type="text" class="form-control" name="nama_barang" value="{{ $barangs->stok }}" disabled>
                        </div>
                <div class="mb-3">
                        <a href="{{ route('barang.index') }}" class="btn btn-outline-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection