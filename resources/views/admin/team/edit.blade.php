@extends('layout.admin.master')
@section('content')
    <div class="bg-light alert alert-danger">
        You must be the change you wish to see in the world. - Mahatma Gandhi
    </div>
    <div class="text-end">
        <a class="btn btn-success" href="{{ route('teams.index') }}">Back to Teams</a>
    </div>
    <div class="container mt-3">
        <h2>Create Abouts</h2>
        <form action="{{ route('teams.update', $team->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3 mt-3">
                <label for="name">Name</label>
                <input class="form-control"type="text" placeholder="Enter Name" name="name"
                    value="{{ $team->name, old('name') }}">
                @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="position">Position</label>
                <input class="form-control"type="text" placeholder="Position" name="position"
                    value="{{ $team->position, old('position') }}">
                @error('position')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror

            </div>
            <div class="mb-3 mt-3">
                <label for="order">Order</label>
                <input class="form-control"type="number" placeholder="Order" name="order"
                    value="{{ $team->order, old('order') }}">
                @error('order')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="facebook_link">Facebook Link</label>
                <input class="form-control"type="text" placeholder="Facebook Link" name="facebook_link"
                    value="{{ $team->facebook_link, old('facebook_link') }}">
                @error('facebook_link')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="instagram_link">Order</label>
                <input class="form-control"type="text" placeholder="Instagram Link" name="instagram_link"
                    value="{{ $team->instagram_link, old('instagram_link') }}">
                @error('instagram_link')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="twitter_link">Order</label>
                <input class="form-control"type="text" placeholder="twitter Link" name="twitter_link"
                    value="{{ $team->twitter_linkk, old('twitter_link') }}">
                @error('twitter_link')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="pwd">Short Description:</label>
                <textarea class="form-control ckeditor" id="editor" name="short_description" placeholder="Short Descriptions">{{ $team->short_description, old('short_description') }}</textarea>
                @error('short_description')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="pwd">Image:</label>
                <input class="form-control image" type="file" name="image">
                @if ($team->image)
                    <img class="image old-image" src="{{ asset('assets/admin/img/team/' . $team->image) }}"
                        alt="{{ $team->title }}" height="100" width="100">
                @endif
                <img class="view-image mt-2" src="" height="60" alt="">

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
                        nthis.siblings('.old-image').hide();
                        nthis.siblings('.view-image').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]); // Read the image file as a data URL
                }
            });
        });
    </script>
@endsection
