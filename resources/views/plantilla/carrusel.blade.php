<style type="text/css">
  .carousel-inner img {
    width: 100%;
    max-height: 650px;
}

.carousel-inner{
 height: 650px;
}
.carrusel-caption{
  background-color: rgb(41,23,1,0.75);
  height: 100%;
  left: 0;
  top:0;
  padding: 30px 45px;
  text-align: left;
  width: 340px;
}
.carrusel-caption p{
  font-size: 26px;
  line-height: 30px;
}
p{color:blue;
}
h5{
  color:yellow;
}
</style>



<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('imagenes/sofia1.jpeg') }}" class="d-block w-100" alt="...">
      
      <!--le metemos cositas-->
      <div class="carousel-caption d-none d-md-block">
    <h5>SOFIA DELGADO GIL</h5>
    <p>La niñas mas dormilona de Valladolid</p>
    <button type="button" class="btn btn-outline-primary" onclick="location.href='http://tatookapikes.com/artistas/sofia'">GALERIA SOFIA</button>
  </div>
    

    </div>
    <div class="carousel-item">
      <img src="{{ asset('imagenes/marina1.jpeg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
    <h5>MARINA DELGADO GIL</h5>
    <p>la niña que le toca las narices a su padre</p>
    <button type="button" class="btn btn-outline-primary" onclick="location.href='http://tatookapikes.com/artistas/marina'">GALERIA MARINA</button>

  </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('imagenes/carlos.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
    <h5>CARLOS DELGADO ALONSO</h5>
    <p>El maestro de todo esto</p>
    <button type="button" class="btn btn-outline-primary" onclick="location.href='http://tatookapikes.com/artistas/carlos'">GALERIA CARLOS</button>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>
