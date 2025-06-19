<nav class="navbar navbar-expand-lg sticky-top bg-dark border-bottom border-body dimensionesBarra" data-bs-theme="dark">
  <div class="container-fluid bg-dark">
    
    <!-- Logo -->
    <a class="navbar-brand fw-bold" href="<?php echo base_url();?>" style="color: rgba(255, 255, 255, 0.6);">
      <img src="/proyecto_1/assets/img/logo-tienda.jpeg" alt="Logo" width="70" height="70" class="d-inline-block align-text-center rounded">
      Athletica
    </a>

    <!-- Botón hamburguesa -->
    <button class="navbar-toggler text-center" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContenido" aria-controls="navbarContenido" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Pestañas (contenido colapsable) -->
    <div class="collapse navbar-collapse" id="navbarContenido">
      <ul class="navbar-nav mx-auto text-center">
        <li class="nav-item">
          <a class="nav-link pestañas" aria-current="page" href="<?php echo base_url('inicio_admin');?>"><i class="fa-solid fa-house"></i> INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link pestañas" href="<?php echo base_url('nosotros');?>"><i class="fa-solid fa-users"></i> NOSOTROS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link pestañas" href="<?php echo base_url('contacto');?>"><i class="fa-solid fa-address-book"></i> CONTACTO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link pestañas" href="<?php echo base_url('productos');?>"><i class="fa-solid fa-truck-fast"></i> PRODUCTOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link pestañas" href="<?php echo base_url('terminos');?>"><i class="fa-solid fa-scale-balanced"></i> TÉRMINOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link pestañas" href="<?php echo base_url('login');?>"><i class="fa-solid fa-user"></i> USUARIO</a>
        </li>
      
        <?php if (session('login')): ?>
    <?php if (session('perfil') == 1): ?>
        <!-- Perfil administrador -->
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('inicio_admin'); ?>">Panel Admin</a>
        </li>
    <?php endif; ?>
    <!-- Común para todos los logueados -->
    <li class="nav-item">
        <a class="nav-link" href="#">Hola, <?= session('apellido'); ?></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('logout'); ?>">Salir</a>
    </li>
<?php else: ?>
    <!-- Visitante no logueado -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('login'); ?>">Login</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('registro'); ?>">Registrarse</a>
    </li>
<?php endif; ?>

      </ul>
    </div>



  </div>
</nav>
