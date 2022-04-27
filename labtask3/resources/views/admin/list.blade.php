@extends('layout.appAdmin')
@section('contentAdmin')
    <table class = "table table-border">
        <tr>
            <th>Name</th>
            <th>ID</th>
            <th>Phone Number</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->phonenumber}}</td>
            <td>{{$user->accountType}}</td>
            <td><a href="/editUser/{{$user->id}}">Edit</a></td>
            <td><a href="/deleteUser/{{$user->id}}">Delete</a></td>
        </tr>
        @endforeach
@endsection