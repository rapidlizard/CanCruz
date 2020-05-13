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
                <th>Entrada</th>
                <th>Salida</th>
            </tr>

            @foreach($reserva as $reservas)
            <tr>
                <td>{{$reservas->reservation_key}}</td>
                <td>{{$reservas->name}}</td>
                <td>{{$reservas->mail}}</td>
                <td>{{$reservas->phone}}</td>
                <td>{{$reservas->check_in}}</td>
                <td>{{$reservas->check_out}}</td>
                <td>   
                    <form action="{{Route('reserva.destroy', $reservas->id)}}" method="post">
                    @method('delete')
                    @csrf
                        <button class="btn btn-danger">
                        <i class="far fa-trash-alt"></i>
                    </form>
                </td>

                <td>
                    <a href="{{Route('reserva.edit', $reservas->id)}}" class="btn btn-secondary" >
                    <i class="fas fa-plus"></i>
                    </a>
                </td>

            </tr>
            @endforeach
        </table>
      
    </div>
</div>
@endsection