@extends('layout.admin.master')
@section('content')
    <div class="bg-light alert alert-danger">
        Very little is needed to make a happy life. - Marcus Aurelius
    </div>
    <div class="text-end">
        <a class="btn btn-success" href="{{ route('contacts.index') }}">Back to About us</a>
    </div>
@endsection
