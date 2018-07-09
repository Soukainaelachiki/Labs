@extends('adminlte::page')

@section('title', 'Admin projet')

@section('content_header')

<h1>Gestion des projets</h1>

@stop

@section('content')

<!--ajouter un projet-->   
<div class="row">
    <a href="{{route('projet.create')}}" class="btn btn-success">Ajouter un projet</a>
</div> 
<!-- mes projets en card-->
<div class="row p-5">
     @foreach($projets as $projet)
        <div class="card" style="width: 30rem;">
        <img class="card-img-top " src="{{Storage::disk('ProjetImageResize')->url($projet->image)}}" alt="Card image cap">
                <div class="card-body">
                    <table class="table table-light">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Contenu</th>
                                <th>URL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>                                      
                                <td>{{$projet->titre}}</td>
                                <td>{{$projet->contenu}}</td>
                                <td>{{$projet->url}}</td>
                            </tr>
                            
                        </tbody>
                    </table>
                    <a href="{{route('projet.show',['projet'=>$projet->id])}}" class="btn btn-success">show</a>   
                </div>
        </div>
    @endforeach
</div> 
@stop           
    