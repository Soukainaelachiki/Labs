@extends('adminlte::page')

@section('title', 'Admin projet')

@section('content_header')

<h1>Commentaire</h1>

@stop

@section('content')  
 <div class="container"> 
    <table class="table table-light">
        <thead>
             <tr>
                 <th>#</th>
                 <th>Name</th>
                 <th>Email</th>
                 <th>Subject</th>
                 <th>Message</th>
                 <th>Validation</th>
                 <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($commentaires as $commentaire)
            <tr> 
                <td>{{$loop->iteration}}</td>
                <td>{{$commentaire->name}}</td>                       
                <td>{{$commentaire->email}}</td>
                <td>{{$commentaire->subject}}</td>
                <td>{{$commentaire->message}}</td>
                <td>{{$commentaire->validation}}</td>
                <td class="d-flex">
                    <a href="{{route('commentaire.show',['commentaire' => $commentaire->id])}}"class="btn btn-info"> Lire</a>
                    <form action="{{route('commentaire.destroy',['commentaire'=>$commentaire->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="btn btn-danger"> Supprimer</button>           
                    </form>
                </td>
            </tr>                          
        @endforeach
        </tbody>
    </table>
</div>
@stop