@extends('templates.basic-layout')

@section('content')

    <main>
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

        <section class="reserva-home flex-row">         
            <div class="selection-estancia">
                <div class="">
                    <h3>Selecciona estancia</h3>
                </div>
                
                <div class="card-small-estancia">
                    <div class="img-checkbox">
                            <input type="radio">
                        <img src="https://images.unsplash.com/photo-1574790413799-c2a5a4ba4d02?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60">
                    </div>
                    <div>
                        <div class="h3texto-right">
                            <h4>ESTANCIA</h4>
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
                        <input type="radio">
                        <img src="https://images.unsplash.com/photo-1578683010236-d716f9a3f461?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80">
                    </div>
                    <div>
                        <div class="h3texto-right">
                            <h4>ESTANCIA</h4>
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
                        <input type="radio">
                        <img src="https://images.unsplash.com/photo-1578683010236-d716f9a3f461?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80">
                    </div>
                    <div>
                            <div class="h3texto-right">
                            <h4>ESTANCIA</h4>
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
                <form action="">
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
                            <label>Check in</label>
                            <input type="date" name="check_in" id="" />
                        </div>
                        <div class="block">
                            <label>Check out</label>
                            <input type="date" name="check_out" id="" />
                        </div>
                        <div class="">
                            <input type="checkbox" name="pet" id="" />
                            <label class="radio-label">
                                <small> Llevo Mascota (+5&euro;)</small>
                            </label>
                        </div>
                        <div class="">
                            <input type="checkbox" name="breakfast" id="" />
                            <label class="radio-label">
                                <small>Con desayuno (+12&euro;/persona)</small>
                            </label>
                        </div>
                    </div>
                    <div>
                        <button class="cta"><p>Continuar reserva</p></button>
                    </div>
                </form>
            </div>

            <div class="calculadora-precio">
                    <h3>
                        <strong>
                            341 €
                        </strong>
                    </h3>
            </div>
            
        </section>
            
    </main>

@endsection
