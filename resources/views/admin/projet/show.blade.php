@extends('adminlte::page')

@section('title', 'Admin projet')

@section('content')
<div class="container">
    <div>
        <h1>{{$projet->titre}}</h1>
    </div>
    <p><img class="img-fluid" src="{{Storage::disk('ProjetImageResize')->url($projet->image)}}" alt=""></p>
    <div>
    <p>{{$projet->contenu}}</p>
    </div>

    <div>{{$projet->url}}</div>

    <div class="d-flex">
        {{--@can('update',$projet)--}}
           <a href="{{route('projet.edit',['projet'=>$projet->id])}}" class="btn btn-warning"> Modifier</a>
        {{--@endcan--}}

        {{--@can('delete',$projet)--}}
        <form action="{{route('projet.destroy',['projet'=>$projet->id])}}" method="post">
             @csrf
             @method('DELETE')
                <button type="submit" class="btn btn-danger"> Supprimer</button>
                
        </form>
        {{--@endcan--}}
       
    </div>
</div>
@stop