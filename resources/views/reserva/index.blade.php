@extends('layouts.app')

@section('content')
<div class="container">


    <div class="d-flex justify-content-sm-between align-items-center">
        <h1>Reservas de Can Cruz</h1>
        <a href="{{Route('reserva.create')}}" class="btn btn-dark">CREAR RESERVA</a>
    </div>
    <br>
    <div class="card col-12 col-md-12" style="overflow:auto; white-space:nowrap">

        <table class="table">
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>E-mail</th>
                <th>Teléfono</th>
                <th>Precio</th>
                <th>Habitación</th>
                <th>Entrada</th>
                <th>Salida</th>
                <th>Dias</th>
            </tr>

            @foreach($reservas as $reserva)
            <tr>
                
                <td>{{$reserva->reservation_key}}</td>
                <td>{{$reserva->name}}</td>
                <td>{{$reserva->mail}}</td>
                <td>{{$reserva->phone}}</td>
                <td>{{$reserva->total_price}}</td>
                <td>{{$reserva->estancia->name}}</td>
                <td>{{$reserva->check_in}}</td>
                <td>{{$reserva->check_out}}</td>
                <td>
                    {{
                        $calendar->calculate_total_days($reserva->check_in, $reserva->check_out)
                    }}
                </td>
                
                <td>   
                    <form action="{{Route('reserva.destroy', $reserva->id)}}" method="post">
                    @method('delete')
                    @csrf
                        <button class="btn btn-danger">
                        <i class="far fa-trash-alt"></i>
                    </form>
                </td>

                <td>
                    <a href="{{Route('reserva.edit', $reserva->id)}}" class="btn btn-secondary" >
                    <i class="fas fa-plus"></i>
                    </a>
                </td>

            </tr>
            @endforeach
        </table>
      
    </div>
</div>
@endsection