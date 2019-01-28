        <style type="text/css">
.card-body{height: 575px;
}
.redes-footer{
	padding: 14px;
}

.text-center team{
    background-image: url('../imagenes/background_Img_Artistas.jpg');
    background-size: cover;
    background-position: center center;
    
}

        </style>

        <!-- EQUIPO -->
        <!-- TEXTO CENTRADO Y CON PADDING DE 1 -->
        <section class="text-center team">
            <div class="container p-1">
                <h1 class="text-center text-black">NUESTRO EQUIPO DE TRABAJO ESTA FORMADO POR</h1>

                <!-- una fila con 4 columnas -->
                <div class="row">
                    <!-- USER TEAM -->
                    <!-- siempre va a ocupar 3 columnas pantalla grande sera responsive -->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <!-- imagen -->
                                <!-- VA A SER RESPONSIVE, REDONDEADA Y ANCHO 50 -->
                                <img src="{{ asset('imagenes/sofia8.jpeg') }}" class="img-fluid rounded-circle w-80 h-50">
                                <h3>SOFIA</h3>
                                 <p>
                                    Autodidacta y polifacético que se inició en el mundillo del tatuaje. Tatuador con sello propio y gran versatilidad.  
                                </p>
                   
                                
                                <a href="sofia.html" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">TRABAJOS</a>

                                <!-- ENLACES SOCIALES -->
                                <!-- contendidos centrados que serán iconos, espaciados con un padding de 4 -->
                                <div class="d-flex flex-row justify-content-center">
            
            <div class="redes-footer">
              <a href="https://www.facebook.com/"><img src="{{ asset('imagenes/facebook.png') }}"height:"29px" width="29px"></a>
              <a href="https://twitter.com/"><img src="{{ asset('imagenes/twitter.png') }}"height:"29px" width="29px"></a>
              <a href="https://www.youtube.com/"><img src="{{ asset('imagenes/youtube.png') }}"height:"29px" width="29px"></a>
            </div>
        </div>
                            </div>
                        </div>
                    </div>
<!-- *************************************************************************************************************** -->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('imagenes/carlos.jpg') }}" class="img-fluid rounded-circle w-80 h-50">
                                <h3>CARLOS</h3>
                                <p>
                                    Autodidacta y polifacético que se inició en el mundillo del tatuaje. Tatuador con sello propio y gran versatilidad.  
                                </p>
                                <a href="carlos.html" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">TRABAJOS</a>
                                <div class="d-flex flex-row justify-content-center">
            
            <div class="redes-footer">
              <a href="https://www.facebook.com/"><img src="{{ asset('imagenes/facebook.png') }}"height:"29px" width="29px"></a>
              <a href="https://twitter.com/"><img src="{{ asset('imagenes/twitter.png') }}"height:"29px" width="29px"></a>
              <a href="https://www.youtube.com/"><img src="{{ asset('imagenes/youtube.png') }}"height:"29px" width="29px"></a>
            </div>
        </div>
                            </div>
                        </div>
                    </div>
<!-- *************************************************************************************************************** -->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('imagenes/marina4.jpeg') }}" class="img-fluid rounded-circle w-80 h-50">
                                <h3>MARINA</h3>
                                <p>Me encantaba dibujar, y siempre supe que me dedicaría a algo que tuviera que ver con el dibujo.  </p>
                                <a href="marina.html" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">TRABAJOS</a>
                                <div class="d-flex flex-row justify-content-center">
            
            <div class="redes-footer">
              <a href="https://www.facebook.com/"><img src="{{ asset('imagenes/facebook.png') }}"height:"29px" width="29px"></a>
              <a href="https://twitter.com/"><img src="{{ asset('imagenes/twitter.png') }}"height:"29px" width="29px"></a>
              <a href="https://www.youtube.com/"><img src="{{ asset('imagenes/youtube.png') }}"height:"29px" width="29px"></a>
            </div>
        </div>
                            </div>
                        </div>
                    </div>

                </div>



        </section>