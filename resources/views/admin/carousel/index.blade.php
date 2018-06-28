@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Carousel</h1>
@stop

@section('content')

<a href="{{route('carousel.create')}}" class= "btn btn-info">Ajouter une image</a>
<div class="container">
    @foreach($carousels as $carousel)
        <img src="{{Storage::disk('CarouselImageResize')->url($carousel->image)}}" alt="">

        <form action="{{route('carousel.destroy',['carousel'=>$carousel->id])}}" method="post">
            @csrf
            @method('delete')
                <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
    @endforeach
</div>



    
@stop