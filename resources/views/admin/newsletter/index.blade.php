@extends('adminlte::page')

@section('title', 'Admin projet')

@section('content_header')

<h1>Insrits à la newsletter</h1>

@stop

@section('content')  
 <div class="container"> 
    <table class="table table-light">
        <thead>
             <tr>
                 <th>Emails des inscrits à la newsletter</th>
                </tr>
        </thead>
        <tbody>
        @foreach($newsletters as $newsletter)
            <tr>                        
                <td>{{$newsletter->email}}</td>
                <td>
                        <form action="{{route('newsletter.destroy',['newsletter'=>$newsletter->id])}}" method="post">
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