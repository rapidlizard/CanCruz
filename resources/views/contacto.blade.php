@extends('templates.basic-layout')

@section('content')

    <main>
        <section>
            <div class="h2texto">
                <h2>Contacto</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>    
            </div>
        </section>
        
        <section>
            <div class="map-data">
                <div class="">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47655.65356497706!2d2.2458132709668996!3d41.71019573417598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4c512e4eb9d6d%3A0x1c00fae37a475890!2s08590%20Figar%C3%B3-Montmany%2C%20Barcelona!5e0!3m2!1ses!2ses!4v1590073950688!5m2!1ses!2ses" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="data">
                    <div class="icon">
                        <span><i class="fas fa-map-marker-alt"></i>Figaró-Montmany 08590 Barcelona </span>
                        <span><i class="fas fa-phone"></i>+34 607 304 498</span>
                        <span><i class="fas fa-envelope"></i>info@masiacanplans.com</span>
                    </div>

                    <div class="social-media">
                        <p>Síguenos en nuestras redes sociales:</p>
                        <div class="social-footer">
                            <a href=""><i class="fab fa-facebook-square fa-3x"></i></a>
                            <a href=""><i class="fab fa-instagram-square fa-3x"></i></a>
                            <a href=""><i class="fab fa-twitter-square fa-3x"></i></a>
                        </div>
                    </div>
                </div>

        </section>

    </main>
        
@endsection
