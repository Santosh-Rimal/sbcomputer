@extends('layout.admin.master')
@section('content')
    <div class="bg-light alert alert-danger">
        Simplicity is the ultimate sophistication. - Leonardo da Vinci
    </div>
    <div class="text-end">
        <a class="btn btn-success" href="{{ route('sliders.index') }}">Back to Sliders</a>
    </div>
    <div class="container mt-3">
        <h2>Create Abouts</h2>
        <form action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 mt-3">
                <label for="title">Title</label>
                <input class="form-control"type="text" placeholder="Enter Title" name="title" value="{{ old('title') }}">
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="title">Order</label>
                <input class="form-control"type="number" placeholder="Order" name="order" value="{{ old('order') }}">
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
                <label for="pwd">Short Description:</label>
                <textarea class="form-control ckeditor" id="editor" name="short_description" placeholder="Short Descriptions">{{ old('short_description') }}</textarea>
                @error('short_description')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pwd">Image:</label>
                <input class="form-control image" type="file" name="icon">
                <img class="view-image mt-2" src="" height="100" width="100" alt="">
                @error('icon')
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
