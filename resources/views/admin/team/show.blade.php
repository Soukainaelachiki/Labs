@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Team</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-2">
        <img src="{{Storage::disk('TeamImageResize')->url($team->photo)}}" alt="" class="img-fluid m-3">
    </div>
    <div class="col-md-10">
        <h2>{{$team->name}}</h2>
        <h3>{{$team->profession}}</h3>
        
    </div>
</div>
<div>
    <a href="{{route('team.edit',['team'=>$team->id])}}" class="btn btn-warning">Modifier</a> 
   
    <form  class="d-inline" action="{{route('team.destroy', ['team' => $team->id])}}" method="post">
            @csrf
            @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
</div>
@stop