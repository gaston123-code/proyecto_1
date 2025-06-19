<section class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-6 m-5 p-5 bg-black justify-content-center text-white">
            <h1 class="titulo">Nueva cuenta</h1>
            <p class="parrafo">Ingrese los datos solicitados para la creación de su cuenta.</p>

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


            <?php if (session('registro_ok')): ?>
                <div class="alert alert-success">
                    <?= session('registro_ok') ?>
                </div>
            <?php endif ?>

            <?= form_open('registro_usuario') ?>
             <?php if (session('registro_ok')){
                echo session('registro_ok');
            }?>

            <?php echo form_open('registro_usuario') ?>

            <div class="row g-3 needs-validation">

                <div class="col-md-6">
                    <label for="nombre" class="form-label">Nombre</label>
                    <?= form_input(['name' => 'nombre', 'id' => 'nombre', 'class' => 'form-control', 'required' => true, 'value' => set_value('nombre')]) ?>
                </div>

                <div class="col-md-6">
                    <label for="apellido" class="form-label">Apellido</label>
                    <?= form_input(['name' => 'apellido', 'id' => 'apellido', 'class' => 'form-control', 'required' => true, 'value' => set_value('apellido')]) ?>
                </div>

                <div class="col-md-12">
                    <label for="correo" class="form-label">Correo</label>
                    <?= form_input(['name' => 'correo', 'id' => 'correo', 'type' => 'email', 'class' => 'form-control', 'required' => true, 'value' => set_value('correo')]) ?>
                </div>

                 <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">DNI</label>
  <?= form_input(['name' => 'dni', 'id' => 'dni', 'class' => 'form-control', 'required' => true, 'value' => set_value('dni')]) ?>
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Domicilio</label>
  <?= form_input(['name' => 'domicilio', 'id' => 'domicilio', 'class' => 'form-control', 'required' => true, 'value' => set_value('domicilio')]) ?>
</div>

                <div class="col-md-12">
                    <label for="contrasena" class="form-label">Contraseña</label>
                    <?= form_password(['name' => 'contrasena', 'id' => 'contrasena', 'class' => 'form-control', 'required' => true]) ?>
                </div>

                <div class="col-md-12">
                    <label for="confirmar" class="form-label">Confirmar Contraseña</label>
                    <?= form_password(['name' => 'confirmar', 'id' => 'confirmar', 'class' => 'form-control', 'required' => true]) ?>
                </div>

                <div class="col-12 text-center">
                    <?= form_submit('registro', 'CREAR CUENTA', "class='btn btn-primary mt-3'") ?>
                </div>
            </div>

            <?= form_close() ?>
            <?php echo form_close() ?>
        </div>
    </div>
</section>