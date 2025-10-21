@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <div class="card">
                <div class="card-header">Data Post</div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                    </div>
                    @endif

                    <a href="{{ route('biodata.create') }}" class="btn btn-primary">Tambahkan</a>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">nama_lengkap</th>
                            <th scope="col">jenis_kelamin</th>
                            <th scope="col">tanggal_lahir</th>
                            <th scope="col">tempat_lahir</th>
                            <th scope="col">agama</th>
                            <th scope="col">alamat</th>
                            <th scope="col">telepon</th>
                            <th scope="col">email</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no =1; @endphp
                            @foreach($biodatas as $data)                             
                            <tr>
                            <td>{{ $no++}}</td>
                            <td>{{ $data->nama_lengkap}}</td>
                            <td>{{ $data->jenis_kelamin}}</td>
                            <td>{{ $data->tanggal_lahir}}</td>
                            <td>{{ $data->tempat_lahir}}</td>
                            <td>{{ $data->agama}}</td>
                            <td>{{ $data->alamat}}</td>
                            <td>{{ $data->telepon}}</td>
                            <td>{{ $data->email}}</td>
                            <td>
                                <a href="{{ route('biodata.edit', $data->id)}}" class="btn btn-success">Ubah</a>
                                <a href="{{ route('biodata.show', $data->id)}}" class="btn btn-warning">Tampilkan</a>
                                <form action="{{ route('biodata.destroy', $data->id) }}" method="POST" class="d-inline">
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
