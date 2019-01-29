<!-- NAVIGATION -->
        <!-- NOS METEMOS EN LA BARRA DE NAVEGACION -->
        <!-- con navbar-expand-lg es cuando cambia y aparece el boton -->
        <!-- navbar-dark y bg-dark le da el color de fondo y los colores al navegador -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <!-- con este container me centra todos los elementos... esta centrado -->
            <div class="container">
                <!-- metiendo un / en href y le damos al boton nos lleva al inicio de la aplicacion -->
                <a class="navbar-brand" href="/">
                    <!-- METEMOS LA IMAGEN QUE FIGURA A LA izquierda le metemos un tamaño especifico -->
                    <img src="{{ asset('imagenes/logoKAPIKES.png') }}" style="width: 10%;">
                </a>
                <!-- el button se debe a cuando cambia el tamaño de la pantalla y aparece un boton -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <!-- con el "ml-auto" le decimos que queremos que se vaya a la derecha -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="http://tatookapikes.com">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://tatookapikes.com/galeria">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://tatookapikes.com/artistas">Artistas</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="http://tatookapikes.com/contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>