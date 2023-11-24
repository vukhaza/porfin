<?php
include 'conexion.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Papeleria el baulito</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <!-----------------------------------buscador-------------------------------------------------->
    <div class="logo">
    <link rel="stylesheet" href="styles.css">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <img src="Captura de pantalla 2023-10-25 230838.png" width="400">

        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  articulos
                </a>
                <ul class="dropdown-menu">
        
                  <li><a class="dropdown-item" href="./login.php">login</a></li>
                  <li><a class="dropdown-item" href="./carrito1.php">carrito</a></li>
              
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
          </div>
        </div>
      </nav>
    </div>
      <div class="container">
        <h1>Novedades</h1>

  <!--------------------------------------------carrusel----------------------------------->
        <div id="carouselExample" class="carousel slide">
          <nav class="navbar" style="background-color: #e3f2fd;">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="activate">
                <img src="Calculadora.png"  width="400"    ><h5>  </h5>
              </div>
              </div>
              <div class="carousel-item">
                <img src="plumas duo.png"  width="600" ><h5>  </h5>
              </div>
              <div class="carousel-item">
                <img src="plumes de pisarron.png"  width="650" ><h5> </h5>

              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </nav>
          </div>
<!--------------------------------------------productos----------------------------------------->

<!--produc1-->
<br>

<div class="grid text-center" style="--bs-columns: 4;">
<div class="contenedor">
<div class="card" style="width: 18rem;">
    <img src="Resistol en barra.jpg" width="300">
    <div class="card-body">
      <h5 class="card-title">Resistol</h5>
      <p class="card-text">$10.</p>
      <a type="accion.php" class="btn btn-primary">Agregar</a>
    </div>
  </div>
  <!--produc2-->
  <div class="card" style="width: 18rem;">
    <img src="Tijeras infantiles.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Tijeras infantiles</h5>
      <p class="card-text">$20</p>
      <a href="#" class="btn btn-primary">Agregar</a>
    </div>
  </div>
  <!--produc3-->
  <div class="card" style="width: 18rem;">
    <img src="Tijeras largas.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Tijeras</h5>
      <p class="card-text">$30</p>
      <a href="#" class="btn btn-primary">Agregar</a>
    </div>
  </div>
  <!--produc4-->
  <div class="card" style="width: 18rem;">
    <img src="Hojas Blancas.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Paq.Hojas blancas</h5>
      <p class="card-text">$100</p>
      <a href="#" class="btn btn-primary">Agregar</a>
    </div>
  </div>
  <!--produc5-->
  <div class="card" style="width: 18rem;">
    <img src="Hojas de Color.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Paq.Hojas de color</h5>
      <p class="card-text">$150</p>
      <a href="#" class="btn btn-primary">Agregar</a>
    </div>
  </div>
  <!--produc6-->
  <div class="card" style="width: 18rem;">
    <img src="Colores.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Caja de colores</h5>
      <p class="card-text">$300</p>
      <a href="#" class="btn btn-primary">Agregar</a>
    </div>
  </div>
  <!--produc7--><div class="card" style="width: 18rem;">
    <img src="Sujetador para hojas.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">porta hojas</h5>
      <p class="card-text">$5</p>
      <a href="#" class="btn btn-primary">Agregar</a>
    </div>
  </div>
  <!--produc8-->
  <div class="card" style="width: 18rem;">
    <img src="clips.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Clips </h5>
      <p class="card-text">$2</p>
      <a href="#" class="btn btn-primary">Agregar</a>
    </div>
  </div>
  <!--produc9-->
  <div class="card" style="width: 18rem;">
    <img src="Marcatextos.png" width="200">
    <div class="card-body">
      <h5 class="card-title">Marcadores</h5>
      <p class="card-text">$80</p>
      <a href="#" class="btn btn-primary">Agregar</a>
    </div>
  </div>
  <!--produc10-->
  <div class="card" style="width: 18rem;">
    <img src="Mochila de goku.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Mochila</h5>
      <p class="card-text">$600</p>
      <a href="#" class="btn btn-primary">Agregar</a>
    </div>
  </div>
  <!--produc11-->
  <div class="card" style="width: 18rem;">
    <img src="Mochilas.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Mochila</h5>
      <p class="card-text">$300</p>
      <a href="#" class="btn btn-primary">Agregar</a>
    </div>
  </div>
  <!--produc12-->
  <div class="card" style="width: 18rem;">
    <img src="Limpiapipas.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Paq.limpiapipas</h5>
      <p class="card-text">$10</p>
      <a href="#" class="btn btn-primary">Agregar</a>
    </div>
  </div>
  <!--produc13-->
  <div class="card" style="width: 18rem;">
    <img src="Lapicera moderna.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Lapicera</h5>
      <p class="card-text">$200</p>
      <a href="#" class="btn btn-primary">Agregar</a>
    </div>
  </div>
  <!--produc14-->
  <div class="card" style="width: 18rem;">
    <img src="Lapicera sensilla.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Lapicera</h5>
      <p class="card-text">$50</p>
      <a href="#" class="btn btn-primary">Agregar</a>
    </div>
  </div>
  <!--produc15-->
  <div class="card" style="width: 18rem;">
    <img src="Lapiz.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Lapiz</h5>
      <p class="card-text">$10</p>
      <a href="#" class="btn btn-primary">Agregar</a>
    </div>
  </div>
  <!--produc16-->
  <div class="card" style="width: 18rem;">
    <img src="Gomas.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Gomas</h5>
      <p class="card-text">$10</p>
      <a href="#" class="btn btn-primary">Agregar</a>
    </div>
  </div>
  <!--produc17-->
  <div class="card" style="width: 18rem;">
    <img src="Silicon.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Silicon</h5>
      <p class="card-text">$15</p>
      <a href="#" class="btn btn-primary">Agregar</a>
    </div>
  </div>
  <!--produc18-->
  <div class="card" style="width: 18rem;">
    <img src="Sacapuntas.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Sacapuntas</h5>
      <p class="card-text">$10</p>
      <a href="#" class="btn btn-primary">Agregar</a>
    </div>
  </div>
  <!--produc19-->
  <div class="card" style="width: 18rem;">
    <img src="Papel bon.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Papel</h5>
      <p class="card-text">$60</p>
      <a href="#" class="btn btn-primary">Agregar</a>
    </div>
  </div>
  <!--produc20-->
  <div class="card" style="width: 18rem;">
    <img src="Libretas.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Libretas</h5>
      <p class="card-text">$200</p>
      <a href="#" class="btn btn-primary">Agregar</a>
    </div>
  </div>
 
</div>
<div class="contenedor2">
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="pagina2.php">2</a></li>
    <li class="page-item"><a class="page-link" href="pagina3.php">3</a></li>
    <li class="page-item"><a class="page-link" href="pagina2.php">Siguiente</a></li>
  </ul>
</nav>
</div>
</div>
  <!-------------------------------------------------------------------------------------------->



      </div>
      <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>