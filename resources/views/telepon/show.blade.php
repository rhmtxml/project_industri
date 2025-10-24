@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Data Post</div>
                <div class="card-body">
                        <div class="mb-3">
                            <label>Nomor</label>
                            <input type="text" class="form-control" name="nomor" value="{{ $telepons->nomor }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nomor" value="{{ $telepons->pengguna->nama }}" disabled>
                        </div>
                <div class="mb-3">
                        <a href="{{ route('telepon.index') }}" class="btn btn-outline-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection