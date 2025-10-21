@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Data Post</div>

                <div class="card-body">
                    <div class="mb-3">
                            <label">Title</label>  
                            <input type="text"  class="form-control"  name="title" value="{{ $posts-> title}}" disable>
                        </div>
                        <div class="mb-3">
                            <label>Content</label>
                            <input type="text" class="form-control" name="content" value="{{ $posts-> content}}" disable>
                        </div>
                        <div class="mb-3">
                            <img src="{{ asset('/images/post/' . $posts->cover) }}"     width="300">
                        </div>

                        <a href="{{route('post.index')}}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
