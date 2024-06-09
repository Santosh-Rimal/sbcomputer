@extends('layout.admin.master')
@section('content')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <div class="bg-light alert alert-danger">
        It is not the man who has too little, but the man who craves more, that is poor. - Seneca
    </div>
    <div class="text-end">
        <a class="btn btn-success" href="{{ route('abouts.index') }}">Back to About us</a>
    </div>

    <div class="container mt-3">
        <h2>Create Abouts</h2>
        <form action="{{ route('abouts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 mt-3">
                <label for="title">Title</label>
                <input class="form-control"type="text" placeholder="Enter Title" value="{{ old('title') }}" name="title">

                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="title">Order</label>
                <input class="form-control"type="number" placeholder="Order" value="{{ old('order') }}" name="order">

                @error('order')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pwd">Description:</label>
                <textarea class="form-control ckeditor" id="editor" name="description" placeholder="Descriptions">{{ old('description') }}</textarea>
                @error('description')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pwd">Image:</label>
                <input class="form-control image" type="file" name="image">
                <img class="view-image mt-2" src="" height="100" width="100" alt="">
                @error('image')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
@endsection
@section('script')
    <script>
        $(function() {
            $(".image").change(function() {
                var input = this; // Get the input element
                var nthis = $(this); // Get the jQuery object of the input element
                if (input.files && input.files[0]) {
                    var reader = new FileReader(); // Create a new FileReader object
                    reader.onload = function(e) {
                        // Set the src attribute of the .view-image element to the data URL
                        nthis.siblings('.view-image').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]); // Read the image file as a data URL
                }
            });
        });
    </script>
@endsection
