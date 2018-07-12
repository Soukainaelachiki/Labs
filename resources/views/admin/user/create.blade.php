@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')

<form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
    @csrf
<!--name-->
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control {{ $errors->has('name')?'border-danger':''}}" value="{{old('name') }}" >
    </div>
<!--email-->
    <div class="form-group">
      <label for="email">E-mail</label>
      <input type="text" name="email" id="email" class="form-control {{ $errors->has('email')?'border-danger':''}}" value="{{old('email')}}">
    </div>
<!--password-->
    
    <div class="form-group">
        <label for="password">Password</label>
        <input type="text" class="form-control" id="password" name="password">            
    </div>
<!--role-->
    @foreach($roles as $element)
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <input type="radio" value="{{$element->id}}" name="role" id="role">
                        <div class="mt-1 ml-2">
                            <label for="role">
                                <p>{{$element->name}}</p>
                            </label>
                        </div>
                </div>
            </div>
        </div>
    @endforeach

    <button type="submit" class="btn btn-info">Enregistrer</button>
    </form>
@stop