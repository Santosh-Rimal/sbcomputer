@extends('layout.admin.master')
@section('content')
    <div class="bg-light alert alert-danger">
        Life is available only in the present moment. - Thich Nhat Hanh
    </div>
    <div class="text-end">
        <a class="btn btn-success" href="{{ route('services.index') }}">Back to Services</a>
    </div>
    <div class="container mt-3">
        <h2>Create Abouts</h2>
        <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3 mt-3">
                <label for="title">Title</label>
                <input class="form-control"type="text" placeholder="Enter Title" name="title"
                    value="{{ $service->title, old('title') }}">
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="title">Order</label>
                <input class="form-control"type="number" placeholder="Order" name="order"
                    value="{{ $service->order, old('order') }}">
                @error('order')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pwd">Description:</label>
                <textarea class="form-control ckeditor" id="editor" name="description" placeholder="Descriptions">{{ $service->description, old('description') }}</textarea>
                @error('description')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pwd">Short Description:</label>
                <textarea class="form-control ckeditor" id="editor" name="short_description" placeholder="Short Descriptions">{{ $service->short_description, old('short_description') }}</textarea>
                @error('short_description')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pwd">Image:</label>
                <input class="form-control image" type="file" name="icon">
                @if ($service->icon)
                    <img class="image old-image" src="{{ asset('assets/admin/img/service/' . $service->icon) }}"
                        alt="{{ $service->title }}" height="100" width="100">
                @endif
                <img class="view-image mt-2" src="" height="60" alt="">

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
                        nthis.siblings('.old-image').hide();
                        nthis.siblings('.view-image').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]); // Read the image file as a data URL
                }
            });
        });
    </script>
@endsection
