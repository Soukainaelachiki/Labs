@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Categorie</h1>
@stop

@section('content')

<form action="{{route('categorie.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="custom-file">
            <label for="nom"></label>
            <input type="text" class="" id="nom" name="nom">
        </div>
        <button type="submit" class="btn btn-info">Enregistrer</button>
</form>
@stop