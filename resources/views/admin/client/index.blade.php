@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Client</h1>
@stop

@section('content')

<table class="table">

    <a href="{{route('client.create')}}" class="btn btn-info">Ajouter un client</a>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Compagnie</th>
            <th scope="col">Image</th>
            <th scope="col">Testimonial</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach($client as $element)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$element->name}}</td>
            <td>{{$element->compagnie}}</td>
            <td>{{$element->image}}</td>
            <td>{{$element->testimonial}}</td>
            <td>{{$element->email}}</td> 
            <td>
              <a href="{{route('client.show',['client'=>$element->id])}}" class="btn btn-info"> Voir plus</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
@stop