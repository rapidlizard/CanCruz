@extends('templates.home-layout')

@section('content')

        <main>
            <section class="estancias">
                <div class="h2texto">
                    <h2>Estancias</h2>
                    <p>
                        La masía de Can Planos fue registrada como fogar ya en
                        el siglo XIV. Una gran nave principal plantada sobre la
                        propia piedra a la planta baja, con el suelo nivelado
                        con losas del propio lugar. Una planta superior con
                        tierras de madera. Paredes de 4 a 5 palmos que guardan
                        la calidez en invierno y la frescura en verano.
                    </p>
                </div>
                <div class="flex-3-items">
                    <div class="img-caption">
                        <img
                            src="https://images.unsplash.com/photo-1574790413799-c2a5a4ba4d02?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                            alt="room picture"
                        />
                        <div class="caption">
                            <h3>Puigracios</h3>
                            <a href="{{url('/puigracios')}}">ver más</a>
                        </div>
                    </div>
                    <div class="img-caption">
                        <img
                            src="https://images.unsplash.com/photo-1578683010236-d716f9a3f461?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80"
                            alt="room picture"
                        />
                        <div class="caption">
                            <h3>Estancia name</h3>
                            <a href="{{url('/puigracios')}}">ver mas</a>
                        </div>
                    </div>
                    <div class="img-caption">
                        <img
                            src="https://images.unsplash.com/photo-1505916349660-8d91a99c3e23?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80"
                            alt="room picture"
                        />
                        <div class="caption">
                            <h3>Estancia name</h3>
                            <a href="{{url('/puigracios')}}">ver más</a>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="huerto">
                <div class="h2texto">
                    <h2>Huerto y cocina ecologica</h2>
                    <p>
                        Elaboramos las comidas con recetas sencillas y
                        saludables, dando el mayor protagonismo a los sabores
                        originales que nos dan los productos de excepcional.
                        Porque nuestros huéspedes lo disfruten en la
                        tranquilidad de nuestro entorno.
                    </p>
                </div>

                <div class="img-text-right">
                    <img
                        src="https://images.unsplash.com/photo-1464226184884-fa280b87c399?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80"
                        alt="vegetables"
                    />
                    <div class="text-square-half">
                        <h3>
                            Alimentos de producción propia o de proximidad
                            ecológica
                        </h3>
                        <p>
                            El surtido de frutas y verduras así como los huevos,
                            en primer momento y según temporada su las
                            hortalizas y verduras las que disponemos de nuestro
                            huerto y del gallinero así como la miel de nuestros
                            campos.
                        </p>
                        <a href="{{url('/huerto_cocina/')}}">ver más</a>
                    </div>
                </div>

                <div class="img-text-left">
                    <img
                        src="./images/verduras.jpg"
                        alt="vegetables"
                    />
                    <div class="text-square-half">
                        <h3>
                            Las verduras ecológicas de nuestro huerto son la
                            base de nuestros platos
                        </h3>
                        <p>
                            Elaboramos las comidas con recetas sencillas y
                            saludables, dando el mayor protagonismo a los
                            sabores originales que nos dan los productos de
                            excepcional calidad.
                        </p>
                        <a href="{{url('/huerto_cocina/')}}">ver más</a>
                    </div>
                </div>
            </section>

            <section>
                <div class="text-img-bg bg-animals-dark">
                    <div class="h2texto">
                        <h2>Animales</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Praesent condimentum non mauris id sagittis.
                            Nullam ullamcorper, leo at fermentum varius, mauris
                            urna tristique ligula, a pretium augue neque eu
                            augue.
                        </p>
                        <a href="{{url('/masia/')}}">ver más</a>
                    </div>
                </div>
            </section>

            <section class="parque">
                <div class="h2-texto-wideimg">
                    <div class="h2texto">
                        <h2>Parque Natural de Montseny</h2>
                        <p>
                            Estamos dentro del Parque Natural del Montseny,
                            reserva de la Biosfera por la UNESCO
                        </p>
                    </div>
            
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
                                    <img src="https://espanafascinante.com/wp-content/uploads/shutterstock_134666519_3.jpg" alt="Parque Natural de Montseny">
                                </div>
                                <div class="item">
                                    <img src="https://www.wallpapers13.com/wp-content/uploads/2017/08/Autumn-Santa-Fe-lake-Natural-Park-of-Montseny-Barcelona-Spain-HD-Wallpaper-for-Desktop-1920x1200.jpg" alt="Parque Natural de Montseny">
                                </div>
                                
                                <div class="item">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/1/10/LES_AGUDES.JPG" alt="Parque Natural de Montseny">
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
                    
                    <a href="{{url('/parque_montseny/')}}">ver más</a>
            </section>
                    
        </main>
@endsection
