@extends('adminlte::page')

@section('title','AdminlTE')

@section('content_header')
    <h1>Commentaire</h1>
@stop

@section('content')

<div class="container">
        <div class="commentaire">
            <h1>{{$commentaire->subject}}</h1>
            <p>{{$commentaire->message}}</p>
            <p>{{$commentaire->name}}</p>
            <p>{{$commentaire->email}}</p>
        </div>

        <div class="d-flex justify-content-end">
            <form action="{{route('validation1.update',['commentaire'=>$commentaire->id])}}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" value="1" name="validation">
                <button type="submit" class="btn btn-success">Validé</button>
            </form>
            <form action="{{route('validation1.update',['commentaire'=>$commentaire->id])}}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" value="2" name="validation">
                <button type="submit" class="btn btn-warning">En attente</button>
            </form>
            <form action="{{route('validation1.update',['commentaire'=>$commentaire->id])}}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" value="3" name="validation">
                <button type="submit" class="btn btn-danger">Refusé</button>
            </form>
        </div>

    <div class="d-flex">
        {{--@can('delete',$article)--}}
        <form action="{{route('commentaire.destroy',['commentaire'=>$commentaire->id])}}" method="post">
             @csrf
             @method('DELETE')
                <button type="submit" class="btn btn-danger"> Supprimer</button>
                
        </form>
        {{--@endcan--}}
       
    </div>
</div>
@stop