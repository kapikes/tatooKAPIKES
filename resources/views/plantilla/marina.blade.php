       <header class="main-header">
            <!-- fondo que llevara la imagen que viene abajo -->
            <div class="background-overlay text-white py-5">
                <div class="container">
                    <div class="row d-flex h-100">
                        <!-- OJO columna de 6 de 12 -->
                        <!-- centra el texto verticalmente -->
                        <div class="col-sm-8 text-center justify-content-center align-self-center ">

                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Neotradicional
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <img src="{{ asset('imagenes/neotradicional.jpg') }}" class="img-thumbnail" hspace="5" vspace="5" style="float: right;" />
                                            <p>Igual que los anteriores, estos emplean contornos en negrita y un sombreado cuidadoso y preciso, pero a diferencia de los tradicionales, son más detallados, más experimentales con el color y la mezcla y, a menudo, más brillantes, aunque con una simbología limitada y la técnica específica del tatuaje tradicional.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Gotico
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            <img src="{{ asset('imagenes/goticos.jpg') }}" class="img-thumbnail" hspace="5" vspace="5" style="float: right;" />
                                            <p>Los tatuajes góticos se relacionan con un estilo de vida o subcultura underground más que a lo que el arte gótico tradicional se refiere. Es un tipo de tatuaje que aporta una sensación de oscuridad o desolación, en el que suelen predominar las calaveras. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Escritos
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <img src="{{ asset('imagenes/escritos.jpg') }}" class="img-thumbnail" hspace="5" vspace="5" style="float: right;" />
                                            <p>Los tatuajes escritos son un tatuaje muy popular que puede variar en su contenido y forma. En la actualidad destacan los escritos menos exagerados, con frases representativas y con un estilo de caligrafía a mano. Aunque también pueden incluir otros tipos de letras, por ejemplo con escritos góticos.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingfour">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                                Geometricos
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                                        <div class="card-body">
                                            <img src="{{ asset('imagenes/geometricos.jpg') }}" class="img-thumbnail" hspace="5" vspace="5" style="float: right;" />
                                            <p>Los tatuajes geométricos también están muy de moda. Se caracterizan por diseños complejos que pueden emplear la asimetría y repetición para crear un diseño más grande y llamativo. Sin embargo, también pueden emplearse formas geométricas más pequeñas y discretas. A menudo son en negro, pero puede utilizar otras tonalidades para crear un efecto 3D. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingfive">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                                Dotwork
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
                                        <div class="card-body">
                                            <img src="{{ asset('imagenes/dotwork.jpg') }}" class="img-thumbnail" hspace="5" vspace="5" style="float: right;" />
                                            <p>El estilo de tatuaje dotwork o punteado es uno de los más modernos y emplea muchos puntos diminutos en áreas donde normalmente se puede usar sombra y se crean formas con estos puntos. Se basa en el impresionismo. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="marinaFotos.html" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">VEMOS MAS....</a>
                        </div>
                        <!-- OJO columna de 6 de 12 -->
                        <div class="col-sm-4">
                            <!-- imagen que aparace en el fondo de la pagina -->
                            <!-- imagen responseive ponemos img-fluid -->
                            <!-- en el archivo main.css esta la imagen de fondo se llama background.jpg  -->
                            <!-- si esta en tañano de pantalla pequeño la imagen desaparece con esta clase -->
                            <img src="{{ asset('imagenes/marina1.jpeg') }}" class="img-fluid d-none d-sm-block">
                        </div>
                    </div>
                </div>
            </div>
        </header>