<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/estilo-nueva-plantilla.css'); ?>">
  </head>
  <body>
    <section class="container-fluid">
        <nav class="navbar navbar-brand .d-inline-flex">

        </nav>
    </section>

    <section id="aui" class="carousel slide">

        <section class="carousel-indicators">

                <button type="button" data-bs-target="#aui" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#aui" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#aui" data-bs-slide-to="2" aria-label="Slide 3"></button>
            
        </section>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-50" src="<?php echo base_url('assets/img/OIP.jpg'); ?>" alt="First slide">>
            </div>

            <div class="carousel-item">
                <img class="d-block w-50" src="/proyecto_1/assets/img/OIP (1).jpg" alt="Second slide">>
            </div>

            <div class="carousel-item">
                <img class="d-block w-50" src="/proyecto_1/assets/img/OIP (2).jpg" alt="Third slide">>
            </div>
        </div>
        <button class="carousel-control-prev" data-bs-target="#aui" type="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </button>

        <button class="carousel-control-next" data-bs-target="#aui" type="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">siguiente</span>
        </button>
    </section>


    <p class="h1">Hello, world!</p>

    <section class="container">
        <div class="row align-item-center">
            <div class="col-8 bg-danger">
                <p class="mx-0">margen 0</p>
            </div>
            <div class="col bg-primary">
                <p class="mx-1">margen 1</p>
            </div>
        </div>
        <p class="text-end fw-bold fst-italic text-uppercase">texto centrado</p>
        
       
        <p class="mx-5">margen 5</p>
    </section>

    <footer class="pie">
        pie de pagina
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>