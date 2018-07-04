@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Zone de Text</h1>
@stop

@section('content')

<form action="{{route('text.update',['zonetext'=>$zonetext->id])}}" method="post">
    @csrf
    @method('PUT')
        <div class="d-flex m-5">
            <label for="contenu">Modifier le texte à droite et enregistrer </label>
            <textarea name="contenu" id="contenu" cols="100" rows="3">{{old('contenu', $zonetext->contenu)}}</textarea>
        </div>
        <button type="submit" class="btn btn-info m-5">Enregistrer</button>
    </form>

@stop