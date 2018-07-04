@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Client</h1>
@stop

@section('content')
<div class="row">
        <div class="col-md-8">
            <div class="box">
                <div class="box-body">
                    <form action="{{route('client.update',['client'=>$client->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name">
                    </div>
                    
                    <div class="form-group">
                        <label for="compagnie">Compagnie</label>
                        <input type="text" name="compagnie" id="compagnie">
                    </div>

                    <div class="form-group">
                        <label for="testimonial">Testimonial</label>
                    <textarea name="testimonial" id="testimonial" cols="50" rows="4">{{old('testimonial', $client->testimonial)}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <div class="custom-file" data-bsfileupload>
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="image">choisissez une image</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>


    </div>

@stop