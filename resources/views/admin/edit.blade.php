@extends('layouts.admin')

@section('content')
@include('partial.errors')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.update') }}" method="post">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="email" class="form-control" id="title" value="{{ $post['title'] }}">
                </div>
                <div class="form-group">
                  <label for="content">Content</label>
                  <textarea class="form-control" id="content" value="{{ $post['content'] }}"></textarea>
                </div>
                @csrf
                <input type="hidden" name="id" value="{{ $postId }}">
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
@endsection