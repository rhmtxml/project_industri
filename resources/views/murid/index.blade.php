@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <div class="card">
                <div class="card-header">Data Pengguna</div>

                <div class="card-body">
                    @if (@session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <a href="{{ route('murid.create') }}" class="btn btn-outline-primary">Add</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Jenis Kelamin</th>
                                <th>tanggal Lahir</th>
                                <th>Tempat Lahir</th>
                                <th>Agama</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>Nama Kelas</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($datamurid as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama_lengkap }}</td>
                                <td>{{ $data->jenis_kelamin }}</td>
                                <td>{{ $data->tanggal_lahir }}</td>
                                <td>{{ $data->tempat_lahir }}</td>
                                <td>{{ $data->agama }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->kelas->nama_kelas }}</td>
                                <td class="text-center">
                                    <a href="{{ route('murid.edit', $data->id) }}" class="btn btn-outline-success">Edit</a>
                                    <a href="{{ route('murid.show', $data->id) }}" class="btn btn-outline-warning">Show</a>
                                    <form action="{{ route('murid.destroy', $data->id) }}" method="POST" class="d-inline">
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