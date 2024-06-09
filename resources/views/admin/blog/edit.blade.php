@extends('layout.admin.master')
@section('content')
    <div class="bg-light alert alert-danger">
        Because you are alive, everything is possible. - Thich Nhat Hanh
    </div>
    <div class="text-end">
        <a class="btn btn-success" href="{{ route('blogs.index') }}">Back to blogs</a>
    </div>
@endsection
