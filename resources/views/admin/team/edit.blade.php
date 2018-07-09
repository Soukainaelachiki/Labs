@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Team</h1>
@stop

@section('content')

<div class="row">
    <div class="col-md-8">
        <div class="">
            <div class="box-body">
                <form action="{{route('team.update',['team'=>$team->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                </div>
                
                <div class="form-group">
                    <label for="profession">Profession</label>
                    <input type="text" name="profession" id="profession">
                </div>

                <div class="form-group">
                    <label for="photo">Photo</label>
                    <div class="custom-file" data-bsfileupload>
                        <input type="file" class="custom-file-input" id="photo" name="photo">
                        <label class="custom-file-label" for="photo">choisissez une photo</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-info">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>


</div>
@stop