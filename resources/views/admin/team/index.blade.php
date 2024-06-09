@extends('layout.admin.master')
@section('content')
    <div class="bg-light alert alert-danger">
        Order your soul. Reduce your wants. - Augustine
    </div>
    <div class="container mt-3">
        <h2>Teams ({{ $teams->count() }})</h2>
        <h2 class="text-end" style="width:100%">
            <p><a class="btn btn-success " href="{{ route('teams.create') }}">Create</a></p>
        </h2>
        <h4>
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </h4>
        @if ($teams->isNotEmpty())
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Order</th>
                        <th>Position</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                @foreach ($teams as $key => $team)
                    <tbody>
                        <tr>
                            <td>{{ $key + $teams->firstItem() }}</td>
                            <td>{{ $team->name ?? '' }}</td>
                            <td>{{ $team->order ?? '' }}</td>
                            <td>{{ $team->position ?? '' }}</td>
                            <td>{{ $team->short_description ?? '' }}</td>
                            <td>
                                <a class="fancybox" data-fancybox="demo"
                                    href="{{ asset('assets/admin/img/team/' . $team->image) }}">
                                    <img src="{{ asset('assets/admin/img/team/' . $team->image) }}"
                                        alt="{{ $team->name ?? '' }}" width="100">
                                </a>
                            </td>
                            <td><a href="{{ route('teams.edit', $team->id) }}"class="btn btn-primary">Edit</a></td>
                            <td>
                                <form class="delete-form" action="{{ route('teams.destroy', $team->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger deletefile" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            {{ $teams->links() }}
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
