@extends('layout.admin.master')
@section('content')
    <div class="bg-light alert alert-danger">
        It is not the man who has too little, but the man who craves more, that is poor. - Seneca
    </div>
    <div class="text-end">
        <a class="btn btn-success" href="{{ route('sliders.index') }}">Back to Sliders</a>
    </div>
@endsection
