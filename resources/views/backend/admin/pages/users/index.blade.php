@extends('backend.admin.layout.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Kullanıcılar</h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Tel</th>
            <th>Mail</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->tel }}</td>
            <td>{{ $user->mail }}</td>
            <td>
                <form action="{{ route('advisors.destroy',$user->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('clients.show',$user->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('clients.edit',$user->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $users->links() !!}

@endsection
