@extends('templates.basic-layout')

@section('content')

    <main>
        <section>
            <div class="h2texto">
                <h2>Reserva realizada</h2>
                <p>
                    Ha realizado correctamente su reserva en Can Cruz
                </p>
            </div>
        </section>

        <section class="reserva-contacto flex-row">  
                    
            <div class="datos-reserva flex-column">
                <div class="data">
                    <h4>DATOS DE RESERVA</h4>
                </div>
                <div class="data">
                    <small>Estancia</small> 
                    @if($request->estancia_id == 1)
                    <p>Puigraciós</p>
                     @endif
                     @if($request->estancia_id == 2)
                    <p>Sant Cristofol</p>
                     @endif
                     @if($request->estancia_id == 3)
                    <p>Rocacentella</p>
                     @endif
                </div> 
                <div class="data">
                    <small>Número de personas</small> 
                    <p>{{$request->persons}}</p>
                </div> 
                <div class="data">
                    <small>Fecha de entrada</small> 
                    <p>{{$request->check_in}}</p>
                </div> 
                <div class="data">
                    <small>Fecha de salida</small> 
                    <p>{{$request->check_out}}</p>
                </div> 
                <div class="data">
                    <small>Extras</small> 
                    @if($request->pet == 1)
                       
                        <p>Llevo mascota (5&euro;)</p>
                    @endif
                    @if($request->breakfast == 1)
                      
                        <p>Desayuno (12€/persona)</p>
                    @endif
                    @if($request->breakfast == 0)
                        <p>Sin Desayuno</p>
                    @endif
                </div> 
                <div class="data">
                    <small>Precio total</small> 
                    <p>{{$request->total_price}}€</p>
                </div> 

            </div>

            <div class="datos-reserva flex-column">
                <div class="data">
                    <h4>DATOS DE CONTACTO</h4>
                </div>
                <div class="data">
                    <small>Nombre</small> 
                    <p>{{$request->name}}</p>
                </div> 
                <div class="data">
                    <small>E-mail</small> 
                    <p>{{$request->mail}}</p>
                </div> 
                <div class="data">
                    <small>Teléfono</small> 
                    <p>{{$request->phone}}</p>
                </div> 

            </div>

            <div class="info">
                <div class="data">
                    <h4>CÓDIGO DE RESERVA</h4>
                    <h3 class="calculadora-precio"><strong>{{$request->reservation_key}}</strong></h3>
                </div> 
                <div class="data-icon">
                    <div class="icon">
                        <span><i class="far fa-clock"></i></span>
                        <p><strong>Horario de entrada y salida</strong></p>
                    </div>
                    <p>
                        La entrada las estancias y la salida de las estancias de
                        Can Cruz es a partir de las 12 am pudiendo estar en 
                        la Masía antes de su hora de entrada.
                    </p>    
                </div>   
                <div class="data-icon">
                    <div class="icon">
                        <span><i class="fas fa-times"></i></span>
                        <p><strong>Cancelaciones de reserva</strong></p>
                    </div>
                    <p>
                        Le rogamos por favor que en caso de no poder asistir 
                        a la estancia reservada, nos envíen un mail a 
                        <a href="mailto:reservas@can-cruz.com">reservas@can-cruz.com</a> 
                        para dejar disponible la estacia a otras personas.
                    </p>    
                </div>   
                
            </div>

            
        </section>
    </main>


@endsection
