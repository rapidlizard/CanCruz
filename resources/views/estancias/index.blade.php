@extends('layouts.app')

@section('content')
<div class="container">

        <div class="card-header">
            <h1>Estancias de Can Cruz</h1>
        </div>
        <a href="{{Route('estancia.create')}}" class="btn btn-dark">CREAR RESERVA</a>

    <div class="card col-12 col-md-12" style="overflow:auto; white-space:nowrap">
        <table class="table">

                <tr>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Precio</th>
                   
                </tr>
            
                @foreach($estancia as $estancias)
                <tr>
                    <td>{{$estancias->name}}</td>
                    <td>{{$estancias->status}}</td>
                    <td>{{$estancias->price}}</td>
                   
                   </tr>

            

            @endforeach
            </table>
       
    </div>
    

  
</div>
@endsection