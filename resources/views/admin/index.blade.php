@extends('layouts.admin')

@section('content')
    @if (Session::has('info'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info">{{ Session::get('info') }}</p> 
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-success" href="{{ route('admin.create') }}">New Post</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <p><b>Learning Laravel</b> <a href="{{ route('admin.edit', ['id' => 1]) }}">Edit</a></p>
        </div>
    </div>
@endsection