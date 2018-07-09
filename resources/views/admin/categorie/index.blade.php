@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Categorie</h1>
@stop

@section('content')


<div class="container">
<a href="{{route('categorie.create')}}" class= "btn btn-info m-3">Ajouter une categorie</a>

    @foreach($categories as $categorie)

    <div class="card m-3" style="width:9rem">
        <div class="card-body">
              <h5 class="card-title">{{$categorie->nom}}</h5>
        </div>
        <form action="{{route('categorie.destroy',['categorie'=>$categorie->id])}}" method="post">
            @csrf
            @method('delete')
                <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
    </div>
     
    @endforeach
</div>

@stop