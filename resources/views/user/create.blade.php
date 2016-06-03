@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1>Create new user form!</h1>
                <form method="POST" action="create/makeNew">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input required id="name" class="form-control" type="text" name="name" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input required id="email" class="form-control" type="email" name="email" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input required id="password" type="password" name="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password</label>
                        <input required id="confirmPassword" type="password" name="password_confirmation" class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop