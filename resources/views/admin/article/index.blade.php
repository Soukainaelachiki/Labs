@extends('adminlte::page')

@section('title','AdminlTE')

@section('content_header')
    <h1>Article</h1>
@stop

@section('content')

<a href="{{route('article.create')}}" class="btn btn-info">Ajouter un article</a>

<table class="table table-light mt-3">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titre</th>
        <th scope="col">Contenu</th>
        <th scope="col">Image</th>
        <th scope="col">Editeur</th>
        <th scope="col">Tags</th>
        <th scope="col">Categorie</th>
        <th scope="col">Validation</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($articles as $article)
        <tr>
          <th scope="row">{{$loop->iteration}}</th>
          <td>{{$article->titre}}</td>
          <td>{{$article->contenu}}</td>
          <td>{{$article->image}}</td>
          <td>{{$article->user->name}}</td>
          <td>
            @foreach($article->tags as $tag)
            {{$tag->theme}}
            @endforeach
          </td>
          <td>{{$article->categories->nom}}</td>
          <td>{{$article->validation}}</td>
          <td><a href="{{route('article.show',['article' => $article->id])}}"class="btn btn-info">En savoir plus...</a></td>
        </tr>   
      @endforeach
        
    </tbody>
  </table>
@stop
