<div class="navbar-expand-lg pt-4">
<div class="mt-5 p-0">
            <img src="assets/img/contacto.webp" alt="" width="100%">
        </div>
    <section class="container my-5">
        
        <div class="row justify-content-center">
            <div class="col-8 form p-5">
                    <h3 class="text-decoration-underline">¡No dudes en mandarnos tu consulta!</h3>
                    <p>Envianos un mensaje a través de nuestro formulario de contacto o bien utilizando nuestro correo ecommerce@Athletica.com.ar</p>
                    
                    <?php
                        helper('form');?>
                    <?php 
                if (!empty($validation)): ?>
                <div call="alert alert-danger" role="alert">
                    <ul>
                        <?php foreach ($validation as $error): ?>
                        <li>
                            <?= esc($error) ?>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php endif ?>

            <?php if (session('mensaje_consulta')){
                echo session('mensaje_consulta');
            }?>

            <?php echo form_open('consulta') ?>

            
                <form class="row g-3 needs-validation position-relative">
                    <div class="col-md-12 position-relative">
                        <label for="nombre" class="form-label">Nombre y apellido</label>
                        <?php echo form_input(['name' => 'nombre', 'id' => 'nombre', 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'ingrese nombre', 'value' => set_value('nombre')]); ?>
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="telefono" class="form-label">Telefono</label>
                        <?php echo form_input(['name' => 'telefono', 'id' => 'telefono', 'type' => 'number', 'class' => 'form-control', 'placeholder' => 'ingrese su telefono', 'value' => set_value('telefono')]); ?>
                    </div>
                    <div class="col-md-6 position-relative">
                        <label for="validationTooltipUsername" class="form-label">Email</label>
                        <?php echo form_input(['name' => 'correo', 'id' => 'email', 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'ingrese su email', 'value' => set_value('email')]); ?>
                    </div>
                    
                    <div class="col-md-12 position-relative">
                        <label for="validationTooltip04" class="form-label">Asunto</label>
                        <?php echo form_input(['name' => 'motivo', 'id' => 'asunto', 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'ingrese el asunto', 'value' => set_value('asunto')]); ?>
                    </div>
                    <div class="col-md-12 position-relative">
                        <label for="validationTooltip05" class="form-label">Consulta</label>
                        <?php echo form_textarea(['name' => 'consulta', 'id' => 'consulta', 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'ingrese su consulta', 'value' => set_value('conulta')]); ?>
                    </div>
                    <div class="col-12 d-grid gap-2 botón mt-2">
                        <?php echo form_submit ('Consulta', 'Enviar', "class='btn'"); ?>
                    </div>
                </form>
            <?php echo form_close();?>
            </div>

            <button class="navbar-toggler ml-0 p-3 botón" type="button" data-bs-toggle="collapse" data-bs-target="#lateral" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <label for="exampleInputEmail1" class="form-label">Informacion de contacto</label>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="col-4 collapse navbar-collapse" id="lateral">
                <div class="links p-5">
                    <i class="fa-solid fa-phone-volume fa-1x d-block mb-3">   TELÉFONO DE CONTACTO</i>
                    <a href="#">0800-777-6789</a>
                    <p class="mb-5">Horario de atención
                        Lunes a Viernes: 8:00 a 17:00 Hs
                        Sábados: 9:00 a 13:00 Hs.
                    </p>

                    <i class="fa-brands fa-whatsapp fa-1x d-block">  <a href="#" class="text-decoration-none mb-3">VIA WHATSAPP.</a></i>
                    <p class="mb-5">Horario de atención
                        Lunes a Viernes: 8:00 a 17:00 Hs
                        Sábados: 9:00 a 13:00 Hs.
                    </p>

                    <i class="fa-solid fa-envelope fa-1x d-block mb-3">   E-MAIL DE CONTACTO</i>
                    <a href="#" class="mb-5">ecommerce@Athletica.com.ar</a>
                </div>
            </div>
        </div>
    </section>
</div>