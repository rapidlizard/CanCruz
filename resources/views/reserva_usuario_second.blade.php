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

        <section class="reserva-contacto flex-row">  
                    
            <div class="datos-reserva flex-column">
                <div class="data">
                    <h4>DATOS DE CONTACTO</h4>
                </div>
                <div class="data">
                    <small>Estancia</small> 
                    <p>Nombre Estancia</p>
                </div> 
                <div class="data">
                    <small>Número de personas</small> 
                    <p>2</p>
                </div> 
                <div class="data">
                    <small>Fecha de entrada</small> 
                    <p>00/00/20202</p>
                </div> 
                <div class="data">
                    <small>Fecha de salida</small> 
                    <p>00/00/20202</p>
                </div> 
                <div class="data">
                    <small>Extras</small> 
                    <p>Desayuno(12€/persona)</p>
                    <p>Llevo mascota (5€)</p>
                </div> 
                <div class="data">
                    <small>Precio total</small> 
                    <p>341€</p>
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
                        <button class="cta"><p>Finalizar reserva</p></button>
                    </div>
                </form>
            </div>

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
