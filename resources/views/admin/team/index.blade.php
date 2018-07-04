@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Team</h1>
@stop

@section('content')

<a href="{{route('team.create')}}" class="btn btn-info">Ajouter un utilisateur</a>

<table class="table table-light">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Photo</th>
        <th scope="col">Profession</th>
      </tr>
    </thead>
    <tbody>
      @foreach($teams as $team)
        <tr>
          <th scope="row">{{$loop->iteration}}</th>
          <td>{{$team->name}}</td>
          <td>{{$team->photo}}</td>
          <td>{{$team->profession}}</td>
          {{-- <td><a href="{{route('team.show',['team' => $team->id])}}"class="btn btn-info">En savoir plus...</a></td> --}}
        </tr>   
      @endforeach
        
    </tbody>
  </table>
@stop