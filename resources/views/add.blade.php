@extends('contact')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Add New User</h2>
        </div>
        <div class="card-body">
            <form class="form" action="{{URL::to('adduser/')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" type="text" name="name">
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-info">Save</button>
                    <a class="btn btn-warning" href="{{URL::to('/')}}">Close</a>
                </div>
            </form>
        </div>

    </div>

    @endsection
