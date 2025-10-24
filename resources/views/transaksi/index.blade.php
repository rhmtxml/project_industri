@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Pengguna</div>

                <div class="card-body">
                    @if (@session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <a href="{{ route('transaksi.create') }}" class="btn btn-outline-primary">Add</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Transai</th>
                                <th>Jumlah</th>
                                <th>total harga</th>
                                <th>id_barang</th>
                                <th>id_pembeli</th>
                                <th class="text-center">Actiaon</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($transaksi as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->tanggal_transaksi }}</td>
                                <td>{{ $data->jumlah }}</td>
                                <td>{{ $data->total_harga }}</td>
                                <td>{{ $data->barang->nama_barang }}</td>
                                <td>{{ $data->pembeli->nama_pembeli }}</td>
                                <td class="text-center">
                                    <a href="{{ route('transaksi.edit', $data->id) }}" class="btn btn-outline-success">Edit</a>
                                    <a href="{{ route('transaksi.show', $data->id) }}" class="btn btn-outline-warning">Show</a>
                                    <form action="{{ route('transaksi.destroy', $data->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</button>
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