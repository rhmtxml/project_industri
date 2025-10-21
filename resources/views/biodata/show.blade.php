@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Data Biodata</div>

                <div class="card-body">
                        <div class="mb-3">
                            <label">nama_lengkap</label>  
                            <input type="text" class="form-control" name="nama_lengkap" value="{{ $biodatas-> nama_lengkap}}" disable>
                        </div>
                        <div class="mb-3">
                            <label>jenis_kelamin</label>
                            <input type="text" class="form-control" name="jenis_kelamin" value="{{ $biodatas-> jenis_kelamin}}" disable>
                        </div>
                        <div class="mb-3">
                            <label>tanggal_lahir</label>
                            <input type="text" class="form-control" name="tanggal_lahir" value="{{ $biodatas-> tanggal_lahir}}" disable>
                        </div>
                        <div class="mb-3">
                            <label">tempat_lahir</label>  
                            <input type="text" class="form-control" name="tempat_lahir" value="{{ $biodatas-> tempat_lahir}}" disable>
                        </div>
                        <div class="mb-3">
                            <label>agama</label>
                            <input type="text" class="form-control" name="agama" value="{{ $biodatas-> agama}}" disable>
                        </div>
                        <div class="mb-3">
                            <label">alamat</label>  
                            <input type="text" class="form-control" name="alamat" value="{{ $biodatas-> alamat}}" disable>
                        </div>
                        <div class="mb-3">
                            <label>telepon</label>
                            <input type="text" class="form-control" name="telepon" value="{{ $biodatas-> telepon}}" disable>
                        </div>
                        <div class="mb-3">
                            <label">email</label>  
                            <input type="text" class="form-control" name="email" value="{{ $biodatas-> email}}" disable>
                        </div>
                        <a href="{{route('biodata.index')}}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
