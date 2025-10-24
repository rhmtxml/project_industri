@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <div class="card">
                <div class="card-header">Data barang</div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                    </div>
                    @endif

                    <a href="{{ route('barang.create') }}" class="btn btn-primary">Tambahkan</a>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Bearang</th>
                            <th scope="col">Merek</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no =1; @endphp
                            @foreach($barangs as $data)                             
                            <tr>
                            <td>{{ $no++}}</td>
                            <td>{{ $data->nama_barang}}</td>
                            <td>{{ $data->merek}}</td>
                            <td>{{ $data->harga}}</td>
                            <td>{{ $data->stok}}</td>
                            <td>
                                <a href="{{ route('barang.edit', $data->id)}}" class="btn btn-success">Ubah</a>
                                <a href="{{ route('barang.show', $data->id)}}" class="btn btn-warning">Tampilkan</a>
                                <form action="{{ route('barang.destroy', $data->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Hapus</button>
                                    </form>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
