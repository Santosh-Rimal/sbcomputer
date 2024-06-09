@extends('layout.admin.master')
@section('content')
    <div class="bg-light alert alert-danger">
        You must be the change you wish to see in the world. - Mahatma Gandhi
    </div>
    <div class="text-end">
        <a class="btn btn-success" href="{{ route('sliders.index') }}">Back to Sliders</a>
    </div>
@endsection
