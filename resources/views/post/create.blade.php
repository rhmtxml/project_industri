@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Data Post</div>

                <div class="card-body">
                    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input 
                                type="text" 
                                class="form-control @error('title') is-invalid @enderror" 
                                id="title" 
                                name="title" 
                                value="{{ old('title') }}" 
                                placeholder="title"
                            >
                            @error('title')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <input 
                                type="text" 
                                class="form-control @error('content') is-invalid @enderror" 
                                id="content" 
                                name="content" 
                                value="{{ old('content') }}" 
                                placeholder=" content"
                            >
                            @error('content')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="cover" class="form-label">Cover (optional)</label>
                            <input 
                                type="file" 
                                class="form-control @error('cover') is-invalid @enderror" 
                                id="cover" 
                                name="cover" 
                                accept="image/*"
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
