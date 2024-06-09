@extends('layout.admin.master')
@section('content')
    <div class="bg-light alert alert-danger">
        It is never too late to be what you might have been. - George Eliot
    </div>
    <div class="text-end">
        <a class="btn btn-success" href="{{ route('blogs.index') }}">Back to Blogs</a>
    </div>
@endsection
