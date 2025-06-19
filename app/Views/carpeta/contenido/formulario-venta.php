<section class="container-fluid justify-content-center">
    <div class="row justify-content-center form w-50 m-5 p-3" style="margin-left: 200px;">

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

            <?php if (session('confirmacion_ok')): ?>
                <div class="alert alert-success">
                    <?= session('confirmacion_ok') ?>
                </div>
            <?php endif ?>

            <?php echo form_open('confirmacion') ?>

    <h2>Confirmar compra</h2>
<p>Ingrese su DNI y domicilio para confirmar la compra</p>
    <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">DNI</label>
  <?= form_input(['name' => 'dni', 'id' => 'dni', 'class' => 'form-control', 'required' => true, 'value' => set_value('dni')]) ?>
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Domicilio</label>
  <?= form_input(['name' => 'domicilio', 'id' => 'domicilio', 'class' => 'form-control', 'required' => true, 'value' => set_value('domicilio')]) ?>
</div>
<input type="hidden" name="id_registro" value="<?= esc($registro['id_registro']) ?>">
<div class="col-12 text-center">
                    <?= form_submit('ventas', 'CREAR CUENTA', "class='btn btn-primary mt-3'") ?>
                </div>
<?= form_close() ?>
            <?php echo form_close() ?>


    </div>
</section>