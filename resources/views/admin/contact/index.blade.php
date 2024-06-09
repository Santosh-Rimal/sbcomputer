@extends('layout.admin.master')
@section('content')
    <div class="bg-light alert alert-danger">
        The whole future lies in uncertainty: live immediately. - Seneca
    </div>
    <div class="container mt-3">
        <h2>contacts ({{ $contacts->count() }})</h2>
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (!$contacts->isEmpty())
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                @foreach ($contacts as $key => $contact)
                    <tbody>
                        <tr>
                            <td>{{ $key + $contacts->firstItem() }}</td>
                            <td>{{ $contact->fname ?? '' }} {{ $contact->lname ?? ''  }}</td>
                            <td>{{ $contact->email ?? '' }}</td>
                            <td>{{ $contact->subject ?? '' }}</td>
                            <td>{{ $contact->phone ?? '' }}</td>
                            <td>{{ $contact->message ?? '' }}</td>
                            <td>
                                <form class="delete-form" action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
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
