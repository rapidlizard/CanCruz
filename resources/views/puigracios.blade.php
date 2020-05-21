@extends('templates.basic-layout')

@section('content')

    <main>
        <section>
            
            <div class="h2texto">
                <h2>Estancia</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>

            <div class="card-estancia">
                <div class="img-description">
                    <div class="estancia-img-price bg-estancia1-price">
                    <p><strong>48&euro;</strong>/noche</p>
                    </div>
                    <div class="title-text-icons">
                        <div class="h3texto-right">
                            <h3>NOMBRE DE LA ESTANCIA</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                Praesent condimentum non mauris id sagittis. Nullam ullamcorper, 
                                leo at fermentum varius, mauris urna tristique ligula, 
                                a pretium augue neque eu augue.
                            </p>
                        </div>
                        <div class="icon">
                            <span><i class="fas fa-users"></i>máx. 4 personas</span>
                            <span><i class="fas fa-dog"></i>mascotas permitidas</span>
                        </div>
                    </div>
                </div>

                <div class="estancia-form">
                    <form action="/reserva_usuario_second">
                    <input type="text" name="estancia_id" value=1 class="hidden-input">
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
                    </form>
                </div>

                <div class="calculadora-precio">
                        <h3>
                            <strong>
                            </strong>
                        </h3>
                </div>
            </div>

        </section>

        <section class="cross-selling">
            <div class="h2texto"><h2>Otras estancias</h2></div>
                <div class="flex-row">
                    <div class="card-small-estancia">
                        <img src="https://images.unsplash.com/photo-1574790413799-c2a5a4ba4d02?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60">
                        <div>
                            <div class="h3texto-right">
                                <h3>ESTANCIA</h3>
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
                    <img src="https://images.unsplash.com/photo-1578683010236-d716f9a3f461?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80">
                    <div>
                        <div class="h3texto-right">
                            <h3>ESTANCIA</h3>
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
        </section>

        <section class="gallery-text">
            <div class="container">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                    <div class="item active">
                        <img src="https://canplans.files.wordpress.com/2019/06/img_4441_lowres-1.jpg?w=2000&h=" alt="Cocina">
                    </div>
                
                    <div class="item">
                        <img src="https://canplans.files.wordpress.com/2018/09/20180921_104136-copia.jpg?w=1280" alt="Safreig">
                    </div>
                    
                    <div class="item">
                        <img src="https://canplans.files.wordpress.com/2019/06/img_4435_lowres.jpg?w=891&h=&zoom=2" alt="Comedor con vistas">
                    </div>
                    </div>
                
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="text-square-half">
                <h3>Disfruta de los espacios comunes de la Masía</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Praesent condimentum non mauris id sagittis. 
                    Nullam ullamcorper, leo at fermentum varius, 
                    mauris urna tristique ligula, a pretium augue neque eu augue.
                </p>
            </div>
        </section>
    </main>

@endsection