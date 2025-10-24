@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Transaksi</div>
                <div class="card-body">
                    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label>tanggal_transaksi</label>
                            <input type="text" class="form-control" name="tanggal_transaksi" placeholder="tanggal_transaksi" value="{{ $transaksi->tanggal_transaksi }}" >
                            @error('tanggal_transaksi')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>jumlah</label>
                            <input type="text" class="form-control" name="jumlah" placeholder="jumlah" value="{{ $transaksi->jumlah }}" >
                            @error('jumlah')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>total_harga</label>
                            <input type="text" class="form-control" name="total_bayar" placeholder="total_harga" value="{{ $transaksi->total_harga }}" >
                            @error('total_harga')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-grup">
                            <label>Nama pembeli</label>
                            <select class="form-control" name="id_pembeli">
                                @foreach($pembeli as $data)
                                <option value="{{ $data->id }}"{{ $transaksi->id_pembeli ? 'selected' : ''}}>{{ $data->nama_pembeli }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-grup">
                            <label>Nama barang</label>
                            <select class="form-control" name="id_barang">
                                @foreach($barang as $data)
                                <option value="{{ $data->id }}"{{ $transaksi->id_barang ? 'selected' : ''}}>{{ $data->nama_barang }}</option>
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
