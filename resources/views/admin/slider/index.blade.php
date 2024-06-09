@extends('layout.admin.master')
@section('content')
    <div class="bg-light alert alert-danger">
        Simplicity is the ultimate sophistication. - Leonardo da Vinci
    </div>
    <div class="container mt-3">
        <h2>sliders ({{ $sliders->count() }})</h2>
        <h2 class="text-end" style="width:100%">
            <p><a class="btn btn-success " href="{{ route('sliders.create') }}">Create</a></p>
        </h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John</td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                </tr>
                <tr>
                    <td>Mary</td>
                    <td>Moe</td>
                    <td>mary@example.com</td>
                </tr>
                <tr>
                    <td>July</td>
                    <td>Dooley</td>
                    <td>july@example.com</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
