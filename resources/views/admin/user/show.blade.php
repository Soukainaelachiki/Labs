@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')

<div>
    <p>Nom: {{$user->name}}</p>
    <p>Email: {{$user->email}}</p>            
    <form  class="d-inline" action="{{route('users.destroy', ['user' => $user->id])}}" method="post">
        @csrf
        @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>
</div>
@stop
