
<section class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-6 p-5 bg-black justify-content-center mt-5" style="margin-bottom: 40px; color: white">
<Section class="container-fluid ">
    <div class="row justify-content-center ">
        <div class="col-4 bg-black justify-content-center" style="width: 100%"></div>
            <h1 class="text-center" style="padding-bottom: 20px">Editar Usuario</h1>
            <div class="col-md-8">

                <?php helper('form'); ?>

                <?php if (!empty($validation)) : ?>
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            <?php foreach ($validation as $error) : ?>
                                <li><?= esc($error) ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                <?php endif ?>

                <?php if (session('mensaje')): ?>
                    <div class="alert alert-success" role="alert">
                        <?= session('mensaje') ?>
                    </div>
                <?php endif ?>

                <?= form_open('usuario/actualizar_usuario') ?>

                <?= form_hidden('id_registro', $usuario['id_registro']) ?>

                <div class="form-group" style="padding-bottom: 10px">
                    <label for="nombre">Nombre</label>
                    <?= form_input(['name' => 'nombre', 'id' => 'nombre', 'class' => 'form-control', 'value' => esc($usuario['nombre_registro'])]) ?>
                </div>

                <div class="form-group" style="padding-bottom: 10px">
                    <label for="apellido">Apellido</label>
                    <?= form_input(['name' => 'apellido', 'id' => 'apellido', 'class' => 'form-control', 'value' => esc($usuario['apellido_registro'])]) ?>
                </div>

                <div class="form-group" style="padding-bottom: 10px">
                    <label for="correo">Correo</label>
                    <?= form_input(['type' => 'email', 'name' => 'correo', 'id' => 'correo', 'class' => 'form-control', 'value' => esc($usuario['correo_registro'])]) ?>
                </div>

                <div class="form-group" style="padding-bottom: 10px">
                    <label for="dni">DNI</label>
                    <?= form_input(['name' => 'dni', 'id' => 'dni', 'class' => 'form-control', 'value' => esc($usuario['dni_registro'])]) ?>
                </div>

                <div class="form-group" style="padding-bottom: 10px">
                    <label for="domicilio">Domicilio</label>
                    <?= form_input(['name' => 'domicilio', 'id' => 'domicilio', 'class' => 'form-control', 'value' => esc($usuario['domicilio_registro'])]) ?>
                </div>

                <div class="form-group" style="padding-bottom: 10px">
                    <label for="contrasena">Contraseña (solo si desea cambiarla)</label>
                    <?= form_input(['type' => 'password', 'name' => 'contrasena', 'id' => 'contrasena', 'class' => 'form-control']) ?>
                </div>

                <div class="form-group mt-3 text-center">
                    <?= form_submit('Actualizar', 'Actualizar Usuario', "class='btn btn-primary'") ?>
                </div>

                <?= form_close(); ?>
            </div>
        </div>
    </div>
</section>
