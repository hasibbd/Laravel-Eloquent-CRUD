@extends('contact')
@section('content')
<h3 class="display-5">Laravel CRUD (Eloquent)</h3>
<div class="text-right pb-3">
    <a href="{{URL::to('add/')}}" class="btn btn-primary">Add User</a>
</div>
<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    @php($i=1)
    @foreach($users as $user)
        <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$user->name}}</td>
            <td>
                <div>
                    <a class="btn btn-warning" type="submit" href="{{URL::to('edit/'.$user->id)}}">Edit</a>
                    <a class="btn btn-danger" type="submit" href="{{URL::to('delete/'.$user->id)}}">Delete</a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
