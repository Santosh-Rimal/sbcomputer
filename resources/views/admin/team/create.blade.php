@extends('layout.admin.master')
@section('content')
    <div class="bg-light alert alert-danger">
        Nothing worth having comes easy. - Theodore Roosevelt
    </div>
    <div class="text-end">
        <a class="btn btn-success" href="{{ route('teams.index') }}">Back to Teams</a>
    </div>
    <div class="container mt-3">
        <h2>Create Abouts</h2>
        <form action="{{ route('teams.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 mt-3">
                <label for="name">Name</label>
                <input class="form-control"type="text" placeholder="Enter Name" name="name" value="{{ old('name') }}">
                @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="position">Position</label>
                <input class="form-control"type="text" placeholder="Position" name="position" value="{{ old('position') }}">
                @error('position')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="order">Order</label>
                <input class="form-control"type="number" placeholder="Order" name="order" value="{{ old('order') }}">
                @error('order')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="facebook_link">Order</label>
                <input class="form-control"type="text" placeholder="Facebook Link" name="facebook_link"
                    value="{{ old('facebook_link') }}">
                @error('facebook_link')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="instagram_link">Order</label>
                <input class="form-control"type="text" placeholder="Instagram Link" name="instagram_link"
                    value="{{ old('instagram_link') }}">
                @error('instagram_link')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="twitter_link">Order</label>
                <input class="form-control"type="text" placeholder="twitter Link" name="twitter_link"
                    value="{{ old('twitter_link') }}">
                @error('twitter_lin')
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
