@extends('adminlte::page')

@section('title','AdminlTE')

@section('content_header')
    <h1>Article</h1>
@stop

@section('content')

<div class="container">
        <div><img src="{{Storage::disk('ArticleImageResize')->url($article->image)}}" alt="">
        </div>
        <div class="article">
            <h1>{{$article->titre}}</h1>
            <p>{{$article->contenu}}</p>
            <p>{{$article->user->name}}</p>
        </div>
        <div class="tag mt-3">
                @foreach($article->tags as $tag)
                {{$tag->theme}}
                @endforeach
        </div>
        <div class="mt-3">
            <p>{{$article->categories->nom}}</p>
        </div>

    <div class="d-flex">
        {{--@can('update',$article)--}}
           <a href="{{route('article.edit',['article'=>$article->id])}}" class="btn btn-warning"> Modifier</a>
        {{--@endcan--}}

        {{--@can('delete',$article)--}}
        <form action="{{route('article.destroy',['article'=>$article->id])}}" method="post">
             @csrf
             @method('DELETE')
                <button type="submit" class="btn btn-danger"> Supprimer</button>
                
        </form>
        {{--@endcan--}}
       
    </div>
</div>
@stop