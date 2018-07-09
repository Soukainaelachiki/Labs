@extends('adminlte::page')

@section('title', 'Projet')

@section('content')

<form action="{{route('projet.update',['projet'=>$projet->id])}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
 <!--Modifier un titre-->
        <div class="form-group">
          <label for="titre">Titre</label>
          <input type="text" id="titre" name="titre" class="form-control {{ $errors->has('titre')?'border-danger':''}}"  value="{{old('titre',$projet->titre) }}">
        </div>
    <!--Modifier une image-->
        <div class="form-group">
            <label for="image">Image</label>
                <div class="custom-file" data-bsfileupload>
                    <input type="file" class="custom-file-input" id="image" name="image">
                    <label class="custom-file-label" for="image"></label>
                </div>
            </div>
        <p><img  class="img-fluid" src="{{Storage::disk('ProjetImageResize')->url($projet->image)}}" alt=""></p>
    <!--Modifier une description-->
        <div class="form-group">
          <label for="contenu">Contenu</label>
          <input type="text" id="contenu" name="contenu"class="form-control {{$errors->has('contenu')? 'border-danger':''}}" value="{{old('contenu',$projet->contenu)}}">

    <!--Modifier l'url-->
    <div class="form-group">
        <label for="url">URL</label>
        <input type="text" id="url" name="url"class="form-control {{$errors->has('url')? 'border-danger':''}}" value="{{old('url',$projet->url)}}">
  

    <!--Bouton enregistrer-->
        <button  type="submit" class="btn btn-info">Enregistrer</button>

</form>
@stop