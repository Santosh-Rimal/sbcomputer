@extends('layout.admin.master')
@section('content')
    <div class="bg-light alert alert-danger">
        Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may
        fear less. - Marie Curie
    </div>
    <div class="text-end">
        <a class="btn btn-success" href="{{ route('contacts.index') }}">Back to About us</a>
    </div>
@endsection
