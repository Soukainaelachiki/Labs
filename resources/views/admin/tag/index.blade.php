@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Tag</h1>
@stop

@section('content')


<div class="container">
<a href="{{route('tag.create')}}" class= "btn btn-info m-3">Ajouter un tag</a>

    @foreach($tags as $tag)

    <div class="card m-3" style="width:9rem">
        <div class="card-body">
              <h5 class="card-title">{{$tag->theme}}</h5>
        </div>
        <form action="{{route('tag.destroy',['tag'=>$tag->id])}}" method="post">
            @csrf
            @method('delete')
                <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
    </div>
     
    @endforeach
</div>

@stop