@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Service</h1>
@stop

@section('content')

<div class="row">
    <div class="col-md-8">
        <div>
            <div class="box-body">
                <form action="{{route('service.update',['service'=>$service->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            
                <div class="form-group">
                    <label for="titre">Titre</label>
                    <input type="text" name="titre" id="titre">
                </div>

                <div class="form-group">
                        <label for="contenu">Contenu</label>
                        <input type="text" name="contenu" id="contenu" >
                      </div>
                @foreach($icons as $element)
                      <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                              <input type="radio" value="{{$element->id}}" name="name" id="name">
                            <div class="mt-1 ml-2">
                                  <label for="name">
                                    <i class="{{$element->name}}"></i>
                                </label>
                            </div>
                            
                              </div>
                            </div>
                          </div>
                @endforeach
                {{$icons->links()}}
                
                <button type="submit" class="btn btn-info">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
</div>


@stop