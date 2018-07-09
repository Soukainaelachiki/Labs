@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Service</h1>
@stop

@section('content')

    <a href="{{route('service.create')}}" class="btn btn-info">Ajouter un service</a>
        @foreach($services as $service)

         <div class="card" style="width: 18rem;">
         <i class="{{$service->icon->name}}"></i>
            <div class="card-body">
              <h5 class="card-title">{{$service->titre}}</h5>
              <p class="card-text">{{$service->contenu}}</p>
              <a href="{{route('service.show',['service'=>$service->id])}}" class="btn btn-info">Voir plus</a>
            </div>
          </div> 
        @endforeach       
@stop
