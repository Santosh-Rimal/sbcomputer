@extends('layout.admin.master')
@section('content')
    <div class="bg-light alert alert-danger">
        It is quality rather than quantity that matters. - Lucius Annaeus Senec
    </div>
    <div class="container mt-3">
        <h2>Services ({{ $services->count() }})</h2>
        <h2 class="text-end" style="width:100%">
            <p><a class="btn btn-success " href="{{ route('services.create') }}">Create</a></p>
        </h2>
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (!$services->isEmpty())
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Icon</th>
                        <th>Order</th>
                        <th>Description</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                @foreach ($services as $key => $service)
                    <tbody>
                        <tr>
                            <td>{{ $key + $services->firstItem() }}</td>
                            <td>{{ $service->title }}</td>
                            <td>
                                <a class="fancybox" data-fancybox="demo"
                                    href="{{ asset('assets/admin/img/service/' . $service->icon) }}">
                                    <img src="{{ asset('assets/admin/img/service/' . $service->icon) }}"
                                        alt="{{ $service->title }}" width="100">
                                </a>
                            </td>
                            <td>{{ $service->order }}</td>
                            <td>{{ $service->description }}</td>
                            <td><a class="btn btn-primary" href="{{ route('services.edit', $service->id) }}">Edit</a></td>
                            <td>
                                <form class="delete-form" action="{{ route('services.destroy', $service->id) }}"
                                    method="POST">
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
