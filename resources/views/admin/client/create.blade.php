@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Client</h1>
@stop

@section('content')

<div class="row">
        <div class="col-md-8">
            <div>
                <div class="box-body">
                    <form action="{{route('client.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name">
                    </div>

                    <div class="form-group">
                        <label for="compagnie">Compagnie</label>
                        <input type="text" name="contenu" id="contenu">
                    </div>

                    <div class="form-group">
                        <label for="testimonial">Testimonial</label>
                        <input type="text" name="testimonial" id="testimonial">
                    </div>

                    <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email">
                          </div>

                   
                    
                    <div class="form-group">
                        <label for="image">Logo</label>
                        <div class="custom-file" data-bsfileupload>
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="logo">choisissez une image</label>
                              </div>
                    </div>
                    <button type="submit" class="btn btn-info">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop