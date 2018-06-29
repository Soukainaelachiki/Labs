@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')

<a href="{{route('users.create')}}" class="btn btn-info">Ajouter un utilisateur</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Rôle</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
        <tr>
          <th scope="row">{{$loop->iteration}}</th>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->password}}</td>
          <td>{{$user->role_id}}</td>
          <td><a href="{{route('users.show',['user' => $user->id])}}"class="btn btn-info">En savoir plus...</a></td>
        </tr>
        
      @endforeach
        
    </tbody>
  </table>
@stop