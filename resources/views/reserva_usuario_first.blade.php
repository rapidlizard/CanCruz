@extends('templates.basic-layout')

@section('content')

    <main>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{$error}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <section>
            <div class="h2texto">
                <h2>Haz tu reserva</h2>
            </div>
        </section>
        
        <section class="stepper-reserva flex-row">
            <div class="active">
                <span><h3>1</h3></span>
                <small>Datos de reserva</small>
            </div>
            <div class="disable">
                <span><h3>2</h3></span>
                <small>Datos de contacto</small>
            </div>
        </section>

        <form action="/reserva_usuario_second">
            <section class="reserva-home flex-row">         
                <div class="selection-estancia">
                    <div class="">
                        <h3>Selecciona estancia</h3>
                    </div>
                    
                    <div class="card-small-estancia">
                        <div class="img-checkbox">
                            <input type="radio" name="estancia_id" value="1">
                            <img src="https://images.unsplash.com/photo-1574790413799-c2a5a4ba4d02?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60">
                        </div>
                        <div>
                            <div class="h3texto-right">
                                <h4>Puigraciós</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p> 
                            </div>
                            <div class="icon">
                                <span><i class="fas fa-users"></i>máx. 4 personas</span>
                                <span><i class="fas fa-dog"></i>mascotas permitidas</span>
                            </div>
                        </div> 
                    </div>
                    
                    <div class="card-small-estancia">
                        <div class="img-checkbox">
                            <input type="radio" name="estancia_id" value="2">
                            <img src="https://images.unsplash.com/photo-1578683010236-d716f9a3f461?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80">
                        </div>
                        <div>
                            <div class="h3texto-right">
                                <h4>Sant Cristofol</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p> 
                            </div>
                            <div class="icon">
                                <span><i class="fas fa-users"></i>máx. 4 personas</span>
                                <span><i class="fas fa-dog"></i>mascotas permitidas</span>
                            </div>
                        </div> 
                    </div>

                    <div class="card-small-estancia">
                        <div class="img-checkbox">
                            <input type="radio" name="estancia_id" value="3">
                            <img src="https://images.unsplash.com/photo-1578683010236-d716f9a3f461?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80">
                        </div>
                        <div>
                                <div class="h3texto-right">
                                <h4>Roca Centella</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p> 
                            </div>
                            <div class="icon">
                                <span><i class="fas fa-users"></i>máx. 4 personas</span>
                                <span><i class="fas fa-dog"></i>mascotas permitidas</span>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="estancia-form">
                    <div class="">
                        <h3>Datos de reserva</h3>
                    </div>
                        <div class="form">
                            <div class="block">
                                <label>Numero de Personas</label>
                                <select name="persons" id="">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            <div class="block">
                                <label>Día de entrada</label>
                                <input type="text" name="check_in" class="datepicker form-control" autocomplete="off">
                            </div>
                            <div class="block">
                                <label>Día de salida</label>
                                <input type="text" name="check_out" class="datepicker form-control" autocomplete="off">
                            </div>
                            <div class="">
                                <input type="checkbox" name="pet" value=1 />
                                <label class="radio-label">
                                    <small> Llevo Mascota (+5&euro;)</small>
                                </label>
                            </div>
                            <div class="">
                                <input type="checkbox" name="breakfast" value=1 />
                                <label class="radio-label">
                                    <small>Con desayuno (+12&euro;/persona)</small>
                                </label>
                            </div>
                        </div>
                        <div>
                            <button class="cta"><p>Continuar reserva</p></button>
                        </div>
                </div>
                <div class="calculadora-precio">
                    <h3>
                        <strong>
                        </strong>
                    </h3>
                </div>
            </section>
        </form>
    </main>

@endsection
