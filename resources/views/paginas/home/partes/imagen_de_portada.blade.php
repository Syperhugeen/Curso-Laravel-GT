<!--este es el carrusel de imágenes de portada-->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
    <li data-target="#myCarousel" data-slide-to="7"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="img-carousel" src="imagenes/Img/header01.jpg" alt="{{$Empresa->name}}">
      <!--      <div class="carousel-caption">
        <h3>Método1</h3>
        <p>Un breve renglón de descripción.</p>
      </div>      -->
    </div>

    <div class="item">
      <img class="img-carousel" src="imagenes/Img/header02.jpg" alt="{{$Empresa->name}}">
            <!--    <div class="carousel-caption">
        <h3>Método2</h3>
        <p>Un breve renglón de descripción.</p>
      </div>    -->
    </div>

    <div class="item">
      <img class="img-carousel" src="imagenes/Img/header03.jpg" alt="{{$Empresa->name}}">
            <!--    <div class="carousel-caption">
        <h3>Método3</h3>
        <p>Un breve renglón de descripción.</p>
      </div>    -->
    </div>

    <div class="item">
      <img class="img-carousel" src="imagenes/Img/header04.jpg" alt="{{$Empresa->name}}">
            <!--    <div class="carousel-caption">
        <h3>Método4</h3>
        <p>Un breve renglón de descripción.</p>
      </div>    -->
    </div>

    <div class="item">
      <img class="img-carousel" src="imagenes/Img/header05.jpg" alt="{{$Empresa->name}}">
            <!--    <div class="carousel-caption">
        <h3>Método5</h3>
        <p>Un breve renglón de descripción.</p>
      </div>    -->
    </div>

    <div class="item">
      <img class="img-carousel" src="imagenes/Img/header06.jpg" alt="{{$Empresa->name}}">
            <!--    <div class="carousel-caption">
        <h3>Método5</h3>
        <p>Un breve renglón de descripción.</p>
      </div>    -->
    </div>

    <div class="item">
      <img class="img-carousel" src="imagenes/Img/header07.jpg" alt="{{$Empresa->name}}">
            <!--    <div class="carousel-caption">
        <h3>Método5</h3>
        <p>Un breve renglón de descripción.</p>
      </div>    -->
    </div>

    <div class="item">
      <img class="img-carousel" src="imagenes/Img/header08.jpg" alt="{{$Empresa->name}}">
            <!--    <div class="carousel-caption">
        <h3>Método5</h3>
        <p>Un breve renglón de descripción.</p>
      </div>    -->
    </div>


    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>