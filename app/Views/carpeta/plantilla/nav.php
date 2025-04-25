<nav class="navbar sticky-top bg-dark border-bottom border-body dimensionesBarra" data-bs-theme="dark">
  <div class="container-fluid bg-dark justify-content-center">
    
  <!--Logo-->
    <div>
    <a class="navbar-brand fw-bold" href="<?php echo base_url();?>" style="color: rgba(255, 255, 255, 0.6);">
      <img src="/proyecto_1/assets/img/logo-tienda.jpeg" alt="Logo" width="70" height="70" class="d-inline-block align-text-center rounded">
        Athletica
    </a>
    </div>

  <!--Pestañas-->
    <div>
      <ul class="nav nav-pills justify-content-center">
        <li class="nav-item">
          <a class="nav-link pestañas" aria-current="page" href="<?php echo base_url();?>"><i class="fa-solid fa-house"></i> INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link pestañas" href="<?php echo base_url('nosotros');?>"><i class="fa-solid fa-users"></i> NOSOTROS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link pestañas" href="<?php echo base_url('contacto');?>"><i class="fa-solid fa-address-book"></i> CONTACTO</a>
        </li>
        <li class="nav-item">
        <a class="nav-link pestañas" href="<?php echo base_url('comercializacion');?>"><i class="fa-solid fa-truck-fast"></i> COMERCIALIZACIÓN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link pestañas" href="<?php echo base_url('terminos');?>"><i class="fa-solid fa-scale-balanced"></i> TÉRMINOS</a>
        </li>

        <li class="nav-item">
          <a class="nav-link pestañas" href="<?php echo base_url('login');?>"><i class="fa-solid fa-user"></i> USUARIO</a>
        </li>
      </ul>
    </div>


  </div>
</nav>