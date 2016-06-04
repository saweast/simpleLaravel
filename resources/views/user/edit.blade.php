@extends('layout')
<style>
    .delete-f{float: right;
    position: relative;
    top: -48px;}
</style>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1>Edit form!</h1>

                <form method="POST" action="/user/{{$user->id}}/edit">
                    {{ method_field('PUT') }}
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input required id="name" class="form-control" type="text" name="name" value="{{$user->name}}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input required id="email" class="form-control" type="email" name="email" value="{{$user->email}}">
                    </div>

                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input required id="password" type="password" name="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password</label>
                        <input required id="confirmPassword" type="password" name="password_confirmation" class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
                <form action="/user/{{$user->id}}/destroy" method="POST">
                    {{ method_field('DELETE') }}
                    {!! csrf_field() !!}
                    <div class="form-group delete-f" >
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop