@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Data Post</div>
                <div class="card-body">
                        <div class="mb-3">
                            <label>tanggal transaksi</label>
                            <input type="text" class="form-control" name="nomor" value="{{ $transaksi->tanggal_transaksi }}" disabled>
                        </div>
                            <label>jumlah</label>
                            <input type="text" class="form-control" name="nomor" value="{{ $transaksi->jumlah }}" disabled>
                        </div>
                            <label>total bayar</label>
                            <input type="text" class="form-control" name="nomor" value="{{ $transaksi->total_bayar }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>id barang</label>
                            <input type="text" class="form-control" name="nomor" value="{{ $transaksi->barang->nama_barang }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>id pembeli</label>
                            <input type="text" class="form-control" name="nomor" value="{{ $transaksi->pembeli->nama_pembeli }}" disabled>
                        </div>
                <div class="mb-3">
                        <a href="{{ route('transaksi.index') }}" class="btn btn-outline-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection