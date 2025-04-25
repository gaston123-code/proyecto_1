<Section class="container-fluid ">
    <div class="row justify-content-center ">
        <div class="col-4 m-5 p-5 bg-black justify-content-center">
            <h1 class="titulo">Iniciar Sesión</h1>
            <h3 class="sub-titulo text-decoration-underline">Clientes registrados</h3>
            <p class="parrafo">Si tiene una cuenta, inicie sesión con su dirección de correo electrónico.</p>
        <form class="row g-3 needs-validation" novalidate>
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">correo</label>
    <input type="text" class="form-control" id="validationCustom01"  required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom02" class="form-label">contraseña</label>
    <input type="text" class="form-control" id="validationCustom02" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
  <div class="col-12 text-center">
    <button class="btn btn-primary" type="submit">INGRESAR</button>
  </div>
  <p class="parrafo text-center mt-5">¿No tiene una cuenta?.</p>
  <div class="col-12 text-center">
    <button class="btn btn-primary" type="submit"><a href="<?php echo base_url('registro');?>">CREAR UNA CUENTA</a></button>
  </div>
</form>
        </div>
    </div>
</Section>