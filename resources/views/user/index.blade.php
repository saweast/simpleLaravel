@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1>You are welcome!</h1>
            </div>
            <div class="col-md-9 col-md-offset-1">
                <ul class="list-group">
                @foreach ($users as $user)
                    <li class="list-group-item"> <a href="/user/{{$user->id}}">{{$user->name}}</a></li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
@stop