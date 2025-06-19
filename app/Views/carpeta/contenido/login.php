
<section class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-6 p-5 bg-black justify-content-center mt-5" style="margin-bottom: 40px">
<Section class="container-fluid ">
    <div class="row justify-content-center ">
        <div class="col-4 bg-black justify-content-center" style="width: 100%">
            <h1 class="titulo">Iniciar Sesión</h1>
            <h3 class="sub-titulo text-decoration-underline">Clientes registrados</h3>
            <p class="parrafo">Si tiene una cuenta, inicie sesión con su dirección de correo electrónico.</p>

            <?php helper('form'); ?>

            <?php if (!empty($validation)): ?>
                <div class="alert alert-danger" role="alert">
                    <ul>
                        <?php foreach ($validation as $error): ?>
                            <li><?= esc($error) ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php endif ?>

            <?php if (session('mensaje')): ?>
                <div class="alert alert-success">
                    <?= session('mensaje') ?>
                </div>
            <?php endif ?>

            <?php echo form_open('login_cliente') ?>

                <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">Correo</label>
                    <?php echo form_input(['name' => 'correo', 'id' => 'correo', 'type' => 'email', 'class' => 'form-control', 'required' => true, 'value' => set_value('correo')]) ?>
                </div>
                <div class="col-md-12">
                    <label for="validationCustom02" class="form-label">Contraseña</label>
                    <?php echo form_password(['name' => 'contrasena', 'id' => 'contrasena', 'class' => 'form-control', 'required' => true]) ?>
                </div>

                <div class="col-12 text-center d-grid gap-2">
                    <button class="btn btn-primary" style="margin-top: 30px" type="submit">INGRESAR</button>
                </div>
            <?php echo form_close() ?>

            <p class="parrafo text-center mt-5">¿No tiene una cuenta?.</p>
                <div class="col-12 text-center d-grid gap-2">
                    <button class="btn btn-primary text-decoration-none" type="submit"><a href="<?php echo base_url('registro');?>" class="text-decoration-none">CREAR UNA CUENTA</a></button>
                </div>
        </div>
    </div>
</Section>
</Section>