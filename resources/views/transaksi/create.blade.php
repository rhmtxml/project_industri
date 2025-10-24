@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Data Telepon</div>
                <div class="card-body">
                    <form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label>tanggal_transaksi</label>
                            <input type="date" class="form-control" name="tanggal_transaksi" placeholder="tanggal_transaksi">
                            @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>jumlah</label>
                            <input type="text" class="form-control" name="jumlah" placeholder="jumlah">
                            @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>total_harga</label>
                            <input type="text" class="form-control" name="total_harga" placeholder="total_harga">
                            @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-grup">
                            <label>id_barang</label>
                            <select class="form-control" name="id_barang">
                                @foreach($barang as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_barang }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-grup">
                            <label>id_pembeli</label>
                            <select class="form-control" name="id_pembeli">
                                @foreach($pembeli as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_pembeli }}</option>
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
