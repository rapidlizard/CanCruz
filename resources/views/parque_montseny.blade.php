@extends('templates.basic-layout')

@section('content')
    <main>

        <section>
            <div class="h2texto">
                <h2>Parque Natural de Montseny</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>
        </section>

        <section class="gallery">  
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
                    <img src="https://canplans.files.wordpress.com/2015/12/mobil-fede-1753.jpg?w=1280" alt="Parque Natura del Montseny">
                    </div>
            
                    <div class="item">
                    <img src="https://canplans.files.wordpress.com/2015/12/20150428_1450421.jpg?w=1280" alt="Parque Natura del Montseny">
                    </div>
                
                    <div class="item">
                    <img src="https://canplans.files.wordpress.com/2018/09/img_20180213_095212.jpg?w=1280"  alt="Parque Natura del Montseny">
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
        </section>

        <section class="subtitle-text-2col">
            <h3>Lorem ipsum amet, consectetur adipiscing elit.</h3>
            <div class="text-2col">
                <div class="col">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Donec gravida malesuada lorem id porta. Nam volutpat ligula elementum arcu blandit placerat.
                        Duis ac neque eu ante elementum dictum eu sed ante. Pellentesque sodales po.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec gravida malesuada 
                        lorem id porta. Nam volutpat ligula elementum arcu blandit placerat. Duis ac neque 
                        eu ante elementum dictum eu sed ante. Pellentesque sodales po.
                    </p>
                </div>
                <div class="col"> 
                    <p class="col">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Donec gravida malesuada lorem id porta.
                        Nam volutpat ligula elementum arcu blandit placerat. Lorem 
                        ipsum dolor sit amet, consectetur adipiscing elit.
                        Donec gravida malesuada lorem id porta. Nam volutpat 
                        ligula elementum arcu blandit placerat.
                        Duis ac neque eu ante elementum dictum eu sed ante. 
                        Pellentesque sodales po.
                    </p>
                </div>
            </div>
        </section>

        <section class="img-text-intro">
            <img src="https://4.bp.blogspot.com/_N2VQK3joM4Y/TNLYij-2X0I/AAAAAAAADCM/QBX4ksW7d5A/s1600/Montseny+%281%29.JPG" alt="fresh tomato of tree">
            <div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Donec gravida malesuada lorem id porta. Nam volutpat ligula elementum arcu blandit placerat.
                    Duis ac neque eu ante elementum dictum eu sed ante. Pellentesque sodales po.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec gravida malesuada 
                    lorem id porta. Nam volutpat ligula elementum arcu blandit placerat. Duis ac neque 
                    eu ante elementum dictum eu sed ante. Pellentesque sodales po.
                    Pellentesque sodales po.
                </p>
            </div>
        </section>

        <section class="quote-text">
            <h3>Projecte camins del Montseny</h3>
            <p>
                Posem en marxa unes rutes a peu d’un o de diversos dies 
                per el parc oferint guiatge expert  que ens farà descobrir 
                paratges d’una bellesa indescriptible, tot gaudint de 
                la travessa de forma segura i plena de noves experiències. 
                Ens allotjarem en diverses masies que ens acolliran 
                per refer-nos i descansar.
            </p>
        </section>

        <section class="img-2col">
            <img src="https://i2.wp.com/www.360meridianos.com/wp-content/uploads/2017/06/parque-natural-montseny-barcelona-4.jpg">
            <img src="https://i1.wp.com/www.360meridianos.com/wp-content/uploads/2017/06/parque-natural-montseny-barcelona-3.jpg">
        </section>

        <section class="img-text-intro">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e8/Les_agudes.jpg/1200px-Les_agudes.jpg" alt="fresh tomato of tree">
            <div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Donec gravida malesuada lorem id porta. Nam volutpat ligula elementum arcu blandit placerat.
                    Duis ac neque eu ante elementum dictum eu sed ante. Pellentesque sodales po.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec gravida malesuada 
                    lorem id porta. Nam volutpat ligula elementum arcu blandit placerat. Duis ac neque 
                    eu ante elementum dictum eu sed ante. Pellentesque sodales po.
                    Pellentesque sodales po. 
                </p>
            </div>
        </section>

        </main>
    </body>
</html>

@endsection
