@extends('layout.admin.master')
@section('content')
    <div class="bg-light alert alert-danger">
        If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius
    </div>
    <div class="text-end">
        <a class="btn btn-success" href="{{ route('contacts.index') }}">Back to About us</a>
    </div>
@endsection
