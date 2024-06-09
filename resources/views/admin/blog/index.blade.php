@extends('layout.admin.master')
@section('content')
    <div class="bg-light alert alert-danger">
        Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh
    </div>
    <div class="container mt-3">
        <h2>Blogs ({{ $blogs->count() }})</h2>
        <h2 class="text-end" style="width:100%">
            <p><a class="btn btn-success " href="{{ route('blogs.create') }}">Create</a></p>
        </h2>
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (!$blogs->isEmpty())
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Short Description</th>
                        <th>Order</th>
                        <th>Image</th>
                        <th>Date</th>
                        <th>Edit</th>/
                        <th>Delete</th>
                    </tr>
                </thead>
                @foreach ($blogs as $key => $blog)
                    <tbody>
                        <tr>
                            <td>{{ $key + $blogs->firstItem() }}</td>
                            <td>{{ $blog->title ?? '' }}</td>
                            <td>{{ $blog->short_description ?? '' }}</td>
                            <td>{{ $blog->order ?? '' }}</td>
                            <td>
                                <a class="fancybox" data-fancybox="demo"
                                    href="{{ asset('assets/admin/img/blog/' . $blog->image) }}">
                                    <img src="{{ asset('assets/admin/img/blog/' . $blog->image) }}"
                                        alt="{{ $blog->title }}" width="100">
                                </a>
                            </td>
                            <td>{{ $blog->date ?? '' }}</td>
                            <td><a class="btn btn-primary" href="{{ route('blogs.edit', $blog->id) }}">Edit</a></td>
                            <td>
                                <form class="delete-form" action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger deletefile" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
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
