@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-header">
        <h1>Añadir una reserva</h1>
    </div>
    <form action="{{Route('reserva.store')}}" method="post">
    @csrf
    <div class="row">
       <div class="card col-12 col-md-3">
       <br><label><b>Check-in</b></label>
            <input type="date" name="check_in" class="form-control">
        </div>
        <div class="card col-12 col-md-3">
        <br><label><b>Check-out</b></label>
           <input type="date" name="check_out" class="form-control">
        </div>
        <div class="col-md-6"></div>
        <div class="card col-12 col-md-3">
            <br><label><b>Personas</b></label>
            <input  class="form-control" type="number" name="persons" class="form-control">
        </div>
       
        <div class="card col-12 col-md-3">
            <br><label><b>Mascota</b></label>
           <label><b>  Si  </b><input type="radio" name="pet" value=1>
           <b>  No  </b><input type="radio" name="pet" value=0>
          </label>
        </div>
        <div class="col-md-6"></div>
        <div class="card col-12 col-md-3">
            <label><b>Nombre</b></label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="card col-12 col-md-3">
         <label><b>E-mail</b></label>
         <input type="email" name="mail" class="form-control">
        </div>
        <div class="col-md-6"></div>
        <div class="card col-12 col-md-6">
        <label><b>Teléfono</b></label>
        <input type="text" name="phone" class="form-control">
        </div>
      
  
    
    </div><div class="card-footer col-12 col-md-6">
      <input type="submit" class="btn btn-secondary btn-xs">
      </div>
    </form>
   

</div>
@endsection
