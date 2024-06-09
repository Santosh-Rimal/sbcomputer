@extends('layout.admin.master')
@section('content')
    <div class="bg-light alert alert-danger">
        The only way to do great work is to love what you do. - Steve Jobs
    </div>
    <div class="row ">
        <div class="col-6">
            <h4>Total Teams:
                {{ $teams ?? 0 }}
            </h4>
        </div>
        <div class="col-6">
            <h4>Total Abouts:
                {{ $abouts ?? 0 }}
            </h4>
        </div>
        <div class="col-6">
            <h4>Total Sliders:
                {{ $sliders ?? 0 }}
            </h4>
        </div>
        <div class="col-6">
            <h4>Total Services:
                {{ $services ?? 0 }}
            </h4>
        </div>
        <div class="col-6">
            <h4>Total Blogs:
                {{ $blogs ?? 0 }}
            </h4>
        </div>
    </div>
@endsection
