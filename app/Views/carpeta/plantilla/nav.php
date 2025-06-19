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
        <?php if (session('login')): ?>
        <?php if (session('perfil') == 1): ?>
            <!-- ADMINISTRADOR -->
            <li class="nav-item">
              <a class="nav-link pestañas" href="<?php echo base_url('agregar'); ?>"><i class="fa-solid fa-plus"></i> AGREGAR PRODUCTOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link pestañas" href="<?php echo base_url('consultasAdm'); ?>"><i class="fa-solid fa-clipboard-question"></i> VER CONSULTAS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link pestañas" href="<?php echo base_url('gestionar'); ?>"><i class="fa-solid fa-gear"></i> GESTIONAR INVENTARIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link pestañas" href="<?php echo base_url('lista-venta'); ?>"><i class="fa-solid fa-clipboard"></i> LISTA DE VENTAS</a>
            </li>
            <li class="nav-item">
            <a class="nav-link pestañas fw-bold" href="<?php echo base_url('usuario/ver_usuario/' . session('id_usuario')); ?>"><i class="fa-solid fa-user"></i> <?= session('apellido'); ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pestañas" href="<?php echo base_url('logout'); ?>"><i class="fa-solid fa-right-from-bracket"></i></a>
            </li>

        <?php else: ?>
            <!-- CLIENTE LOGUEADO -->
            <li class="nav-item">
              <a class="nav-link pestañas" href="<?php echo base_url();?>"><i class="fa-solid fa-house"></i> INICIO</a>
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
              <a class="nav-link pestañas" href="<?php echo base_url('ver_catalogo');?>"><i class="fa-solid fa-book-open"></i> CATÁLOGO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link pestañas" href="<?php echo base_url('ver_carrito');?>"><i class="fa-solid fa-cart-shopping"></i> CARRITO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link pestañas" href="<?php echo base_url('lista-venta-cliente'); ?>"><i class="fa-solid fa-clipboard"></i> LISTA DE COMPRAS</a>
            </li>
            <li class="nav-item">
            <a class="nav-link pestañas fw-bold" href="<?php echo base_url('usuario/ver_usuario/' . session('id_usuario')); ?>"><i class="fa-solid fa-user"></i> <?= session('apellido'); ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pestañas" href="<?php echo base_url('logout'); ?>"><i class="fa-solid fa-right-from-bracket"></i></a>
            </li>
        <?php endif; ?>
        
    <?php else: ?>
        <!-- VISITANTE (NO LOGUEADO) -->
        <li class="nav-item">
          <a class="nav-link pestañas" href="<?php echo base_url();?>"><i class="fa-solid fa-house"></i> INICIO</a>
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
              <a class="nav-link pestañas" href="<?php echo base_url('ver_catalogo');?>"><i class="fa-solid fa-book-open"></i> CATÁLOGO</a>
            </li>
        <li class="nav-item">
          <a class="nav-link pestañas" href="<?php echo base_url('login');?>"><i class="fa-solid fa-user"></i> USUARIO</a>
        </li>
    <?php endif; ?>
      </ul>
    </div>

    

  </div>
</nav>
