@extends('layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Login form!</h1>
            <form method="POST" action="/auth/login">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="email">Email</label>
                    <input required id="email" class="form-control" type="email" name="email" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input required id="password" class="form-control" type="password" name="password" id="password">
                </div>

                <div class="form-group">
                    <input type="checkbox" name="remember" id="remember"> <label for="remember">Remember Me</label>
                </div>

                <div>
                    <button type="submit" class="btn-success btn">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop