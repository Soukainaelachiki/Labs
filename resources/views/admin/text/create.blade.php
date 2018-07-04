@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Zone de Text</h1>
@stop

@section('content')

<form action="{{route('text.store')}}" method="post">
    @csrf
    <div class="d-flex m-5">
        <label for="contenu">My text</label>
        <textarea name="contenu" id="contenu" cols="100" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-info">Enregistrer</button>
</form>

@stop