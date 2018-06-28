@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Carousel</h1>
@stop

@section('content')

<form action="{{route('carousel.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="image" name="image">
            <label class="custom-file-label" for="image"></label>
        </div>
        <button type="submit" class="btn btn-info">Enregistrer</button>
</form>
@stop