@extends('backend.admin.layout.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Danışmanlar</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('advisors.create') }}"> Yeni Danışman ekle</a>
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
            <th>Image</th>
            <th>Name</th>
            <th>Tel</th>
            <th>Mail</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($advisors as $advisor)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/images/{{ $advisor->image }}" width="100px"></td>
            <td>{{ $advisor->name }}</td>
            <td>{{ $advisor->tel }}</td>
            <td>{{ $advisor->mail }}</td>
            <td>{{ $advisor->detail }}</td>
            <td>
                <form action="{{ route('advisors.destroy',$advisor->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('advisors.show',$advisor->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('advisors.edit',$advisor->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $advisors->links() !!}

@endsection
