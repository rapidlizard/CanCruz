@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-header">
        <h1>Añadir una reserva</h1>
    </div>
    <form action="{{Route('reserva.store')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-12 col-md-4">
            <br>
            <label><b>Llegada</b></label>
            <input type="date" name="check_in" class="form-control">
        </div>
        <div class="col-12 col-md-4">
        <br><label><b>Salida</b></label>
           <input type="date" name="check_out" class="form-control">
        </div>
        
        <div class="col-12 col-md-4">
            <br><label><b>Personas</b></label>
            <input  class="form-control" type="number" name="persons" class="form-control">
        </div>
       
        <div class=" col-12 col-md-4">
            <br><br><label><b>Mascota</b>
           <label><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <b>Si</b>&nbsp;&nbsp;
           <input type="radio" name="pet" value=1></label>
           <label><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <b>No</b>&nbsp;&nbsp;
           <input type="radio" name="pet" value=0>
          </label>
        </div>
        <div class=" col-12 col-md-4">
           <br> <br><label><b>Desayuno</b>
           <label><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <b>Si</b>&nbsp;&nbsp;
           <input type="radio" name="breakfast" value=1></label>
           <label><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <b>No</b>&nbsp;&nbsp;
           <input type="radio" name="breakfast" value=0>
          </label>
        </div>
         <div class="col-12 col-md-4">
         <br><label><b>Habitacion</b></label>
        <br> <select class="col-md-12 form-control" name="estancias_id" id="">
            <option value="1">Puigraciós</option>
            <option value="2">Estança de Sant Cristofol</option>
            <option value="3">Estança de la Roca Centella</option>
         </select>
        </div>
        <div class="col-12 col-md-4">
           <br> <label><b>Nombre</b></label>
            <input type="text" name="name" class="form-control">
        </div>
       

        <div class="col-12 col-md-4">
         <br><label><b>E-mail</b></label>
         <input type="email" name="mail" class="form-control">
        </div>
      
        <div class="col-12 col-md-4">
        <br><label><b>Teléfono</b></label>
        <input type="text" name="phone" class="form-control">
        </div>
      
  
    
    </div>
    <br><div class="card-footer col-12 col-md-12">
      <input type="submit" class="btn btn-secondary btn-xs">
      </div>
    </form>
   

</div>
@endsection
