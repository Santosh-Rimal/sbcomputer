@extends('layout.admin.master')
@section('content')
    <div class="bg-light alert alert-danger">
        Well begun is half done. - Aristotle
    </div>
    <div class="text-end">
        <a class="btn btn-success" href="{{ route('teams.index') }}">Back to Teams</a>
    </div>
@endsection
