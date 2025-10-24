@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <div class="card">
                <div class="card-header">Data pembeli</div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                    </div>
                    @endif

                    <a href="{{ route('pembeli.create') }}" class="btn btn-primary">Tambahkan</a>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Pembeli</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no =1; @endphp
                            @foreach($pembelis as $data)                             
                            <tr>
                            <td>{{ $no++}}</td>
                            <td>{{ $data->nama_pembeli}}</td>
                            <td>{{ $data->jenis_kelamin}}</td>
                            <td>{{ $data->telepon}}</td>
                            <td>
                                <a href="{{ route('pembeli.edit', $data->id)}}" class="btn btn-success">Ubah</a>
                                <a href="{{ route('pembeli.show', $data->id)}}" class="btn btn-warning">Tampilkan</a>
                                <form action="{{ route('pembeli.destroy', $data->id) }}" method="POST" class="d-inline">
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
