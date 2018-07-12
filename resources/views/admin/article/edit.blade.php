@extends('adminlte::page')

@section('title','AdminlTE')

@section('content_header')
    <h1>Article</h1>
@stop

@section('content')
<form action="{{route('article.update',['article'=>$article->id])}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
 <!--Modifier un titre-->
        <div class="form-group">
          <label for="titre">Titre</label>
          <input type="text" id="titre" name="titre" class="form-control {{ $errors->has('titre')?'border-danger':''}}"  value="{{old('titre',$article->titre) }}">
        </div>
    <!--Modifier une image-->
        <div class="form-group">
            <label for="image">Image</label>
                <div class="custom-file" data-bsfileupload>
                    <input type="file" class="custom-file-input" id="image" name="image">
                    <label class="custom-file-label" for="image"></label>
                </div>
            </div>
        <p><img  class="img-fluid" src="{{Storage::disk('ArticleImageResize')->url($article->image)}}" alt=""></p>
    <!--Modifier une description-->
        <div class="form-group">
          <label for="contenu">Contenu</label>
          <input type="text" id="contenu" name="contenu"class="form-control {{$errors->has('contenu')? 'border-danger':''}}" value="{{old('contenu',$article->contenu)}}">

    <!--Bouton enregistrer-->
        <button  type="submit" class="btn btn-info">Enregistrer</button>

</form>
@stop