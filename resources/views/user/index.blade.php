@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                @if (session('auth')=='Authorized')
                    <h1>You are WELCOME!</h1>
                @else
                    <h1>Hello, guest!</h1>
                @endif
            </div>
            <div class="col-md-9 col-md-offset-1">
                @if (session('auth')=='Authorized')
                    <ul class="list-group">
                        @foreach ($users as $user)
                            <li class="list-group-item"> <a href="/user/{{$user->id}}">{{$user->name}}</a></li>
                        @endforeach
                    </ul>
                @endif

            </div>
        </div>
    </div>
@stop