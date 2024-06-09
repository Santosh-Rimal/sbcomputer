@extends('layout.admin.master')
@section('content')
    <div class="bg-light alert alert-danger">
        I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger
    </div>

    <div class="container mt-3">
        <h2>About Us ({{ $abouts->count() }})</h2>
        <h2 class="text-end" style="width:100%">
            <p><a class="btn btn-success " href="{{ route('abouts.create') }}">Create</a></p>
        </h2>
        <h4>
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </h4>
        @if (!$abouts->isEmpty())
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                @foreach ($abouts as $key => $about)
                    <tbody>
                        <tr>
                            <td>{{ $key + $abouts->firstItem() }}</td>
                            <td>{{ $about->title ?? '' }}</td>
                            <td>{!! $about->description ?? '' !!}</td>
                            <td>

                                <a class="fancybox" data-fancybox="demo"
                                    href="{{ asset('assets/admin/img/about/' . $about->image) }}">
                                    <img src="{{ asset('assets/admin/img/about/' . $about->image) }}" width="100" />
                                </a>

                            </td>
                            <td><a href="{{ route('abouts.edit', $about->id) }}"class="btn btn-primary">Edit</a></td>
                            <td>
                                <form class="delete-form" action="{{ route('abouts.destroy', $about->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger deletefile" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            {{ $abouts->links() }}
        @endif
    </div>

@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('.deletefile').click(function(e) {
                e.preventDefault();
                swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this imaginary file!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            $(this).closest("form").submit();
                            swal("Poof! Your imaginary file has been deleted!", {
                                icon: "success",
                            });
                        } else {
                            swal("Your imaginary file is safe!");
                        }
                    });
            });
        });
    </script>
@endsection
