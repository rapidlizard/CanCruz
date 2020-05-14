@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <h1>Añadir una reserva</h1>
    </div>
    <form action="{{Route('reserva.update',$reserva->id)}}" method="post">
    @csrf
    @method('put')
    <div class="row">

      <div class="col-12 col-md-4">
        <br>
        <label><b>Check-in</b></label>
          <input type="date" name="check_in" class="form-control" value="{{$reserva->check_in}}">
      </div>
      
      <div class="col-12 col-md-4">
        <br>
        <label><b>Check-out</b></label>
        <input type="date" name="check_out" class="form-control" value="{{$reserva->check_out}}">
      </div>
        <br>
        
        <div class=" col-12 col-md-4">
          <br>
          <label><b>Personas</b></label>
            <input  class="form-control" type="number" name="persons" class="form-control" value="{{$reserva->persons}}">
        </div>
        <br>
        
      <div class=" col-12 col-md-4">
        <br>
        <br>
        <label><b>Mascota</b>
          <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Si</b>
          <input type="radio" name="pet" value="1" 
          
          @if($reserva->pet == 1)
            checked
          @endif
          >
          <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>No</b>
          <input type="radio" name="pet" value="0" 
          @if($reserva->pet == 0)
            checked
          @endif
          >
          </label> 
      </div> 
        
      <div class="col-12 col-md-4">
        <br>
        <br>
          <label><b>Desayuno</b>
           <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <b>Si</b>
           <input type="radio" name="breakfast" value=1
            @if($reserva->breakfast == 1)
            checked
            @endif
           >
           </label>
           <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <b>No</b><input type="radio" name="breakfast" value=0
           @if($reserva->breakfast == 0)
            checked
            @endif
           >
          </label>
        </div>

        <div class="col-12 col-md-4">
          <br>
          <label><b>Habitción</b></label>
          <select class="col-md-12 form-control" name="estancias_id" id="">
            <option value="1">Puigraciós</option>
            <option value="2">Estança de Sant Cristofol</option>
            <option value="3">Estança de la Roca Centella</option>
          </select>
        </div>

        <div class="col-12 col-md-4">
         <br>
         <label><b>E-mail</b></label>
         <input type="email" name="mail" class="form-control" value="{{$reserva->mail}}">
        </div>
        
        <div class="col-12 col-md-4">
          <br><label><b>Nombre</b></label>
          <input type="text" name="name" class="form-control" value="{{$reserva->name}}">
        </div>
       
        <div class="col-12 col-md-4">
          <br>
          <label><b>Teléfono</b></label>
          <input type="text" name="phone" class="form-control" value="{{$reserva->phone}}">
        </div>
    
    </div>
      <br>
      <br>
      <div class="d-flex justify-content-between">
        <a href="/reserva" class="btn btn-link"><span style="padding-right:8px"><i class="fas fa-chevron-left"></i></span>Volver al listado</a>
        <input type="submit" class="btn btn-primary btn-xs" value="Actualizar Reserva">
      </div>
      
    </form>
    

  
</div>
@endsection
