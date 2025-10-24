@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Data kelas</div>
                <div class="card-body">
                        <div class="mb-3">
                            <label>Nama kelas</label>
                            <input type="text" class="form-control" name="kelas" value="{{ $kelass->nama_kelas }}" disabled>
                        </div>
                <div class="mb-3">
                        <a href="{{ route('kelas.index') }}" class="btn btn-outline-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection