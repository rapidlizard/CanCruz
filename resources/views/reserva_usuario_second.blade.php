@extends('templates.basic-layout')

@section('content')

    <main>
        <section>
            <div class="h2texto">
                <h2>Haz tu reserva</h2>
            </div>
        </section>
        
        <section class="stepper-reserva flex-row">
            <div class="disable">
                <span><h3>1</h3></span>
                <small>Datos de reserva</small>
            </div>
            <div class="active">
                <span><h3>2</h3></span>
                <small>Datos de contacto</small>
            </div>
        </section>
        
        <form action="/success">
        <section class="reserva-contacto flex-row">  
                    
            <div class="datos-reserva flex-column">
                <div class="data">
                    <h4>DATOS DE RESERVA</h4>
                </div>
                <div class="data">
                    <small>Estancia</small>
                    <p>{{$request->estancia_id}}</p>
                    <input class="hidden-input" type="number" value="{{$request->estancia_id}}" name="estancia_id">
                </div> 
                <div class="data">
                    <small>Número de personas</small>
                    <p>{{$request->persons}}</p>
                    <input class="hidden-input" type="number" value="{{$request->persons}}" name="persons">
                </div> 
                <div class="data">
                    <small>Fecha de entrada</small>
                    <p>{{$request->check_in}}</p>
                    <input class="hidden-input" type="text" name="check_in" class="datepicker form-control" autocomplete="off" value="{{$request->check_in}}">
                </div> 
                <div class="data">
                    <small>Fecha de salida</small>
                    <p>{{$request->check_out}}</p>
                    <input class="hidden-input" type="text" name="check_out" class="datepicker form-control" autocomplete="off" value="{{$request->check_out}}">
                </div> 
                <div class="data">
                    <small>Extras</small>
                    @if($request->pet == 1)
                        <input class="hidden-input" type="number" value="{{$request->pet}}" name="pet">
                        <p>Llevo mascota (5&euro;)</p>
                    @endif
                    @if($request->breakfast == 1)
                        <input class="hidden-input" type="number" value="{{$request->breakfast}}" name="breakfast">
                        <p>Desayuno (12€/persona)</p>
                    @endif
                    @if($request->breakfast == 0)
                        <p>Sin Desayuno</p>
                    @endif
                </div> 
                <div class="data">
                    <small>Precio total</small>
                    <input class="hidden-input" type="number" value="{{$price}}" name="total_price">
                    <p>{{$price}}&euro;</p>
                </div> 

            </div>

            <div class="estancia-form">
                <div class="">
                    <h3>Datos de Contacto</h3>
                </div>
                    <div class="form">
                        <div class="block">
                            <label>Nombre</label>
                            <input type="text" name="name">
                        </div>
                        <div class="block">
                            <label>E-mail</label>
                            <input type="email" name="mail">
                        </div>
                        <div class="block">
                            <label>Teléfono (opcional)</label>
                            <input type="text" name="phone">
                        </div>
                        <div class="">
                            <input type="checkbox" name="pet" id="" />
                            <label class="radio-label">
                                <small>Do you accept Terms of Service</small>
                            </label>
                        </div>
                    </div>
                    <div>
                        <button class="cta"><p>Finalizar reserva</p></button>
                    </div>
                </div>
            </form>
                
            <div class="info">
                <div class="icon">
                    <span><i class="fas fa-info-circle"></i></span>
                    <p><strong>Reserva gratuita</strong></p>
                </div>
                <p>
                    La reserva en Can Cruz es totalmente gratuita. 
                    Le informamos que el importe a pagar pors su estancia.
                </p>
            </div>
        </section>
    </main>


@endsection
