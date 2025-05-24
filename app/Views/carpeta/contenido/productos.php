<section class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-6 m-5 p-5 bg-black justify-content-center text-white">
            <h1 class="titulo">Producto</h1>
            <p class="parrafo">Ingrese los datos del producto.</p>

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


            <?php if (session('')): ?>
                <div class="alert alert-success">
                    <?= session('') ?>
                </div>
            <?php endif ?>

            <?= form_open('') ?>

            <div class="row g-3 needs-validation">

                <div class="col-md-6">
                    <label for="nombre" class="form-label">Descripcion</label>
                    <?= form_input(['name' => 'descripcion', 'id' => 'descripcion', 'class' => 'form-control', 'required' => true, 'value' => set_value('descripcion')]) ?>
                </div>

                <div class="col-md-6">
                    <label for="apellido" class="form-label">Precio</label>
                    <?= form_input(['name' => 'precio', 'id' => 'precio', 'class' => 'form-control', 'required' => true, 'value' => set_value('precio')]) ?>
                </div>

                <div class="col-md-12">
                    <label for="correo" class="form-label">stock</label>
                    <?= form_input(['name' => 'stock', 'id' => 'stock', 'class' => 'form-control', 'required' => true, 'value' => set_value('stock')]) ?>
                </div>

                <div class="col-md-12">
                    <label for="contrasena" class="form-label">nombre</label>
                    <?= form_password(['name' => 'nombre', 'id' => 'nombre', 'class' => 'form-control', 'required' => true, 'value' => set_value('nombre')]) ?>
                </div>

                <div class="col-md-12">
                    <label for="confirmar" class="form-label">Categoria</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>

                <div class="col-md-12">
                    <label for="confirmar" class="form-label">Marca</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">adidas</option>
                        <option value="2">puma</option>
                        <option value="3">nike</option>
                        <option value="4">topper</option>
                        <option value="5">under armour</option>
                        <option value="6">atomik</option>
                        <option value="7">fila</option>
                        <option value="8">athletic</option>
                        <option value="9">joma</option>
                        <option value="10">new balance</option>
                        <option value="11">head</option>
                    </select>
                </div>

                <div class="col-md-12">
                    <label for="confirmar" class="form-label">Genero</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">hombre</option>
                        <option value="2">mujer</option>
                    </select>
                </div>

                <div class="col-12 text-center">
                    <?= form_submit('', 'CARGAR PRODUCTO', "class='btn btn-primary mt-3'") ?>
                </div>
            </div>

            <?= form_close() ?>
        </div>
    </div>
</section>