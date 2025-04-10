<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="/proyecto_1/assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/proyecto-estilo.css');?>">
  </head>
  <body>


  <section class="container-fluid barra">
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-danger">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Principal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('C:\xampp\htdocs\proyecto_1\app\Views\carpeta\quienes-somos.php');?>">Quienes somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Comercialización</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>



  <section class="container-fluid">
    <div class="row">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="<?php echo base_url('assets/img/a.jpg');?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="<?php echo base_url('assets/img/b.jpg');?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/c.jpg');?>" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
    </button>
    </div>
    </div>  
  </section>


  
      <div class="container-fluid">
        <div class="row">
        <h1 class="text-center titulo">Nombre de la empresa</h1>
        <h3 class="text-center bg-primary ">Ultimos lanzamietos</h3>
        </div>
      </div>
  

    <section class="container-fluid">
    <div class="row row-cols-1 row-cols-md-3 g-3 my-5">
  <div class="col">
    <div class="card h-100">
      <img src="<?php echo base_url('assets/img/OIP.jpg');?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="<?php echo base_url('assets/img/OIP (1).jpg');?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="<?php echo base_url('assets/img/OIP (2).jpg');?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>
    </section>

<div class="container-fluid">
        <div class="row">
        <h3 class="text-center bg-primary ">Ofertas de la semana</h3>
        </div>
      </div>
  

    <section class="container-fluid">
    <div class="row row-cols-1 row-cols-md-3 g-3 my-5">
  <div class="col">
    <div class="card h-100">
      <img src="<?php echo base_url('assets/img/OIP.jpg');?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="<?php echo base_url('assets/img/OIP (1).jpg');?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="<?php echo base_url('assets/img/OIP (2).jpg');?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>
    </section>

<div class="container-fluid compra-por-marca">
        <div class="row">
          <h3 class="text-center bg-primary ">Compra por marca</h3>
        <div class="col">
          <ul class="list-group  list-group-horizontal justify-content-center" >
            <li class="list-group-item  text-decoration-none border-0" ><a href="..." >adidas</a></li>
            <li class="list-group-item text-decoration-none border-0" ><a href="..." >skechers</a>
            <li class="list-group-item text-decoration-none border-0" ><a href="..." >Nike</a>
            <li class="list-group-item  text-decoration-none border-0" ><a href="..." >Puma</a>
            <li class="list-group-item text-decoration-none border-0" ><a href="..." >Topper</a>
          </ul>

        </div>
      </div>
        </div>
      </div>
  

    <section class="container-fluid">
    <div class="row row-cols-1 row-cols-md-3 g-3 my-5">
  <div class="col">
    <div class="card h-100">
      <img src="<?php echo base_url('assets/img/OIP.jpg');?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="<?php echo base_url('assets/img/OIP (1).jpg');?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="<?php echo base_url('assets/img/OIP (2).jpg');?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>
    </section>


    
    <footer class="container-fluid">
      <div class="row">
        <div class="col">
        copyright
        </div>
        <div class="col tex-align-end">
        <ul class="list-group  list-group-horizontal justify-content-center" >
            <li class="list-group-item  text-decoration-none border-0" ><a href="..." ><img src="<?php echo base_url('assets/img/pngwing.com.png');?>"></a></li>
            <li class="list-group-item text-decoration-none border-0" ><img src="<?php echo base_url('assets/img/pngwing1.com.png');?>"></li>
            <li class="list-group-item text-decoration-none border-0" ><img src="<?php echo base_url('assets/img/pngwing2.com.png');?>"></li>
            <li class="list-group-item  text-decoration-none border-0" ><img src="<?php echo base_url('assets/img/pngwing3.com.png');?>"></li>
            <li class="list-group-item text-decoration-none border-0" ><img src="<?php echo base_url('assets/img/pngwing4.com.png');?>"></li>
            <li class="list-group-item text-decoration-none border-0" ><img src="<?php echo base_url('assets/img/pngwing5.com.png');?>"></li>
          </ul>

        </div>
      </div>
      
      
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>