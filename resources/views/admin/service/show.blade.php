@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Service</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-2">
        <i class="{{$service->icon->name}}"></i>
    </div>
    <div class="col-md-3">
        <h5 class="card-title">{{$service->titre}} g</h5>
    </div>
    <div class="col-md-7"> 
        <p class="card-text">{{$service->contenu}} v</p>
    </div>
    <div class="">
        <a href="{{route('service.edit',['service'=>$service->id])}}" class="btn btn-warning">Modifier</a> 
           
        <form  class="d-inline" action="" method="post">
        @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
        </div>
    
</div>
    
@stop