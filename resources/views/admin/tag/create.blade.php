@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Tag</h1>
@stop

@section('content')

<form action="{{route('tag.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="custom-file">
            <label for="theme"></label>
            <input type="text" class="" id="theme" name="theme">
        </div>
        <button type="submit" class="btn btn-info">Enregistrer</button>
</form>
@stop