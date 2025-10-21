@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Post</div>

                <div class="card-body">
                    <form action="{{ route('post.update', $posts->id) }}" method="post" entype="multipart/form-data">
                    @csrf    
                    @method('PUT')
                    <div class="mb-3">
                            <label">Title</label>  
                            <input type="text" class="form-control" name="title" value="{{ $posts-> title}}">
                            @error('title')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Content</label>
                            <input type="text" class="form-control" name="content" value="{{ $posts-> content}}">
                            @error('content')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <img src="{{ asset('/images/post/' . $posts->cover) }}"     width="300">
                        </div>
                        <div class="mb-3">
                            <label for="cover" class="form-label">Cover</label>
                            <input 
                                type="file" 
                                class="form-control" 
                                id="cover" 
                                name="cover" 
                            >
                            @error('cover')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
