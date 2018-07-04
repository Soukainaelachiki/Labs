@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Client</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-2">
        <img src="{{Storage::disk('ClientImageResize')->url($client->image)}}" alt="" class="img-fluid">
    </div>
    <div class="col-md-10">
        <h2>{{$client->name}}</h2>
        <h3>{{$client->compagnie}}</h3>
        <p>{{$client->testimonial}}</p>
        <p>{{$client->email}}</p>
    </div>
</div>
<div>
    <a href="{{route('client.edit',['client'=>$client->id])}}" class="btn btn-warning">Modifier</a> 
   
    <form  class="d-inline" action="{{route('client.destroy', ['client' => $client->id])}}" method="post">
            @csrf
            @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
</div>

@stop