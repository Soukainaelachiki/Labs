@extends('adminlte::page')

@section('title', 'Projet')

@section('content_header')
    <h1> Je rajoute un projet </h1>
@stop

@section('content')
<form action="{{route('projet.store')}}" method="post" enctype="multipart/form-data">  
    @csrf
    
    <!--ajouter un titre-->
        <div class="form-group">
          <label for="titre">Titre</label>
          <input type="text" id="titre" name="titre" class="form-control {{ $errors->has('titre')?'border-danger':''}}"  value="{{old('titre') }}">
        </div>
    <!--ajouter une image-->
        <div class="form-group">
            <label for="image">Image</label>
                <div class="custom-file" data-bsfileupload>
                    <input type="file" class="custom-file-input" id="image" name="image">
                    <label class="custom-file-label" for="image"></label>
                </div>
            </div>
    <!--ajouter un contenu-->
        <div class="form-group">
          <label for="contenu">Description</label>
          <input type="text" class="form-control" id="contenu" name="contenu">
        </div>
        

    <!--ajouter une url-->
        <div class="form-group">
            <label for="url">URL</label>
            <input type="text" class="form-control" id="url" name="url">
        </div>

    <button type="submit" class="btn btn-success">Enregistrer</button>
</form>


@stop