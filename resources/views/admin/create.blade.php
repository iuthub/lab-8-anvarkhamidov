@extends('layouts.admin')

@section('content')
  @include('partials.error')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.create') }}" method="post">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="email" class="form-control" id="title" placeholder="Enter title for new post ...">
                </div>
                <div class="form-group">
                  <label for="content">Content</label>
                  <textarea class="form-control" id="content" placeholder="Enter content for new post..."></textarea>
                </div>
                @csrf
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
@endsection