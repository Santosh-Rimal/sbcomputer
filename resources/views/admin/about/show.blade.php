@extends('layout.admin.master')
@section('content')
    <div class="bg-light alert alert-danger">
        Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci
    </div>
    <div class="text-end">
        <a class="btn btn-success" href="{{ route('abouts.index') }}">Back to About us</a>
    </div>
@endsection
