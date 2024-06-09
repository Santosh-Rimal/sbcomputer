@extends('layout.admin.master')
@section('content')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <div class="bg-light alert alert-danger">
        People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius
    </div>
    <div class="text-end">
        <a class="btn btn-success" href="{{ route('abouts.index') }}">Back to About us</a>
    </div>
    <div class="container mt-3">
        <h2>Create Abouts</h2>
        <form action="{{ route('abouts.update', $about->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3 mt-3">
                <label for="title">Title</label>
                <input class="form-control"type="text" value="{{ $about->title }}" name="title">

                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pwd">Description:</label>
                <textarea class="form-control ckeditor" id="editor" name="description" placeholder="Descriptions">
                    {{ $about->description }}
                </textarea>
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pwd">Image:</label>
                <input class="form-control image" type="file" name="image">
                @if ($about->image)
                    <img class="image old-image" src="{{ asset('assets/admin/img/about/' . $about->image) }}"
                        alt="{{ $about->title }}" height="100" width="100">
                @endif
                <img class="view-image mt-2" src="" height="60" alt="">
                @error('title')
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
                        nthis.siblings('.old-image').hide();
                        nthis.siblings('.view-image').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]); // Read the image file as a data URL
                }
            });
        });
    </script>
@endsection
