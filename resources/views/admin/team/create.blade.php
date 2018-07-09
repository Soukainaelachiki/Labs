@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Team</h1>
@stop

@section('content')

<form action="{{route('team.store')}}" method="post" enctype="multipart/form-data">
    @csrf
<!--name-->
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control {{ $errors->has('name')?'border-danger':''}}" value="{{old('name') }}" >
    </div>
<!--email-->
    <div class="form-group">
      <label for="profession">Profession</label>
      <input type="text" name="profession" id="profession" class="form-control {{ $errors->has('email')?'border-danger':''}}" value="{{old('email')}}">
    </div>
<!--password-->
    
    <div class="custom-file">
        <label class="custom-file-label" for="photo"></label>
        <input type="file" class="custom-file-input" id="photo" name="photo">     
    </div>
    <button type="submit" class="btn btn-info">Enregistrer</button>
    </form>

@stop