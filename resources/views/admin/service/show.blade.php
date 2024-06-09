@extends('layout.admin.master')
@section('content')
    <div class="bg-light alert alert-danger">
        Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi
    </div>
    <div class="text-end">
        <a class="btn btn-success" href="{{ route('services.index') }}">Back to Services</a>
    </div>
@endsection
