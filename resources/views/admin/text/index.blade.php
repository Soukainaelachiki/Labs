@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Zone de Text</h1>
@stop

@section('content')

<a href="{{route("text.create")}}" class="btn btn-info"> Ajouter du text</a>

<table class="table table-light">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Contenu</th>
        <th scope="action">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($zonetexts as $element)
        <tr>
          <th scope="row">{{$loop->iteration}}</th>
          <td>{{$element->contenu}}</td>
          <td>
            <a href="{{route('text.edit',['zonetext'=>$element->id])}}" class="btn btn-warning" >
              Modifier</a>
           
            {{-- @can('delete',$element) --}}
            <form  class="d-inline" action="{{route('text.destroy',['zonetext'=>$element->id])}}" method="post">
                @csrf
                @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
            {{-- @endcan --}}
          </td>
        </tr>   
      @endforeach 
    </tbody>
  </table>
@stop

