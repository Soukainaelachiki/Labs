@extends('adminlte::page')

@section('title','AdminlTE')

@section('content_header')
    <h1>Article</h1>
@stop

@section('content')

<form action="{{route('article.store')}}" method="post" enctype="multipart/form-data">
    @csrf

<!--titre-->
    <div class="form-group">
        <label for="titre">Titre</label>
        <input type="text" name="titre" id="titre" class="form-control {{ $errors->has('titre')?'border-danger':''}}" value="{{old('titre') }}" >
    </div>
<!--image-->
<div class="custom-file">
        <input type="file" class="custom-file-input" id="image" name="image">
        <label class="custom-file-label" for="image"></label>
    </div>
<!--contenu-->
    <div class="form-group">
      <label for="contenu">Contenu</label>
      <input type="text" name="contenu" id="contenu" class="form-control {{ $errors->has('contenu')?'border-danger':''}}" value="{{old('contenu')}}">
    </div>
<!--editeur-->
<h4>Choisir l'éditeur</h4>    
<div class="input-group">
    @foreach($users as $element)
    <div class="input-group-prepend m-1">
        <div class="input-group-text">
        <input type="radio" value="{{$element->id}}" name="name" id="name">
      <div class="mt-1 ml-2">
            <label for="name">
             <p>{{$element->name}}</p>
          </label>
      </div>
        </div>
    </div>
    @endforeach
</div>
<!--tags-->
<h4>Choisir les tags</h4>
<div class="input-group">
    @foreach($tags as $element)
    <div class="input-group-prepend m-1">
        <div class="input-group-text">
            <label for="">
                <input type="checkbox" value="{{$element->id}}" name="tags_id[]" id="">
                {{$element->theme}}
        </label>
        </div>
    </div>
    @endforeach
</div>
<!--categories-->
<h4>Choisir la categorie</h4>    
<div class="input-group">
    @foreach($categories as $element)
    <div class="input-group-prepend m-1">
        <div class="input-group-text">
        <input type="radio" value="{{$element->id}}" name="categorie_id" id="nom">
      <div class="mt-1 ml-2">
            <label for="nom">
             <p>{{$element->nom}}</p>
          </label>
      </div>
        </div>
    </div>
    @endforeach
</div>

    <button type="submit" class="btn btn-info">Enregistrer</button>
    </form>
@stop