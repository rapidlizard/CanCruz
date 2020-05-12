@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-header">
        <h1>Añadir una reserva</h1>
    </div>
    <form action="{{Route('reserva.update',$reserva->id)}}" method="post">
    @csrf
    @method('put')
    <div class="row">
       <div class="card col-12 col-md-3">
       <br><label><b>Check-in</b></label>
            <input type="date" name="check_in" class="form-control" value="{{$reserva->check_in}}">
        </div>
        <div class="card col-12 col-md-3">
        <br><label><b>Check-out</b></label>
           <input type="date" name="check_out" class="form-control" value="{{$reserva->check_out}}">
        </div>
        <div class="col-md-6"></div>
        <div class="card col-12 col-md-3">
            <br><label><b>Personas</b></label>
            <input  class="form-control" type="number" name="persons" class="form-control" value="{{$reserva->persons}}">
        </div>
       
        <div class="card col-12 col-md-3">
        <br><label><b>Mascota</b><br>
          <b>Si</b>
          <input type="radio" name="pet" value="1" 
          @if($reserva->pet == 1)
            checked
          @endif
          >
          </label><label><b>No</b>
          <input type="radio" name="pet" value="0" 
          @if($reserva->pet == 0)
            checked
          @endif
          >
          </label>  
           <!-- <label><b>  Si  </b><input type="radio" name="pet" value=1>
           <b>  No  </b><input type="radio" name="pet" value=0>
          </label> -->
        </div>
        <div class="col-md-6"></div>
        <div class="card col-12 col-md-3">
            <label><b>Nombre</b></label>
            <input type="text" name="name" class="form-control" value="{{$reserva->name}}">
        </div>
        <div class="card col-12 col-md-3">
         <label><b>E-mail</b></label>
         <input type="email" name="mail" class="form-control" value="{{$reserva->mail}}">
        </div>
        <div class="col-md-6"></div>
        <div class="card col-12 col-md-6">
        <label><b>Teléfono</b></label>
        <input type="text" name="phone" class="form-control" value="{{$reserva->phone}}">
        </div>
      
  
    
    </div><div class="card-footer col-12 col-md-6">
      <input type="submit" class="btn btn-secondary btn-xs" value="Actualizar Reserva">
      </div>
    </form>
   

</div>
@endsection
