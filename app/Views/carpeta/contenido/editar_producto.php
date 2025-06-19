
<section class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-6 p-5 bg-black justify-content-center mt-5" style="margin-bottom: 40px; color: white">
<Section class="container-fluid ">
    <div class="row justify-content-center ">
        <div class="col-4 bg-black justify-content-center" style="width: 100%"></div>
                  <h1 class="text-center" style="padding-bottom: 20px">Editar producto</h1>
                  <div class="col-md-8">

                        <?php
                            helper('form');?>
                        <?php 
                        if (!empty($validation)): ?>
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                <?php foreach ($validation as $error): ?>
                                <li>
                                    <?= esc($error) ?>
                                </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                        <?php endif ?>

                        <?php if (session('mensaje')){
                            echo session('mensaje');
                        }?>

                        <?php echo form_open_multipart('actualizar') ?>

                        <div class="form-group" style="padding-bottom: 10px">
                        <label for="nombre">Nombre</label>
                        <?php echo form_input(['name'=>'nombre','id'=>'nombre','class'=>'form-control','autofocus'=>'autofocus','value'=>$producto['nombre_producto']]);?>
                        </div>
                        <div class="form-group" style="padding-bottom: 10px">
                        <label for="precio">Precio</label>
                        <?php echo form_input(['name'=>'precio','id'=>'precio','class'=>'form-control','autofocus'=>'autofocus','value'=>$producto['precio_producto']]);?>
                        </div>
                        <div class="form-group" style="padding-bottom: 10px">
                        <label for="descripcion">Descripción</label>
                        <?php echo form_input(['name'=>'descripcion','id'=>'descripcion','class'=>'form-control','autofocus'=>'autofocus','value'=>$producto['descrpcion_producto']]);?>
                        </div>
                        <div class="form-group" style="padding-bottom: 10px">
                        <label for="stock">Stock</label>
                        <?php echo form_input(['name'=>'stock','id'=>'stock','class'=>'form-control','autofocus'=>'autofocus','value'=>$producto['stock_producto']]);?>
                        </div>
                        <div class="form-group" style="padding-bottom: 10px">
                        <label for="imagen">Imagen</label><br>
                        <img src="<?php echo base_url('assets/uploads/'.$producto['imagen_producto']);?>" alt="" height="100" width="100" />
                        <?php echo form_input(['name'=>'imagen','id'=>'imagen','type'=>'file']);?>
                        </div>
                        <div class="form-group" style="padding-bottom: 10px">
                        <label for="categoria">Categoria</label>
                        <?php 
                            $lista_categoria['0']='Seleccione categoria';
                            foreach($categorias as $row){
                            $lista_categoria[$row['id_categoria']] = $row['descripcion_categoria'];
                            }
                            $sel=$producto['categoria_producto'];
                            echo form_dropdown('categoria', $lista_categoria, $sel, 'class="form-control"');
                        ?>
                        </div>
                        <div class="form-group" style="padding-bottom: 10px">
                        <label for="genero">Genero</label>
                        <?php 
                            $lista_genero['0']='Seleccione el genero';
                            foreach($generos as $row){
                            $lista_genero[$row['id_genero']] = $row['descripcion_genero'];
                            }
                            $sel=$producto['genero_producto'];
                            echo form_dropdown('genero', $lista_genero, $sel, 'class="form-control"');
                        ?>
                        </div>
                        <div class="form-group" style="padding-bottom: 10px">
                        <label for="marca">Marca</label>
                        <?php 
                            $lista_marca['0']='Seleccione la marca';
                            foreach($marcas as $row){
                            $lista_marca[$row['id_marca']] = $row['descripcion_marca'];
                            }
                            $sel=$producto['marca_producto'];
                            echo form_dropdown('marca', $lista_marca, $sel, 'class="form-control"');
                        ?>
                        </div>
                        <?php echo form_hidden('id', $producto['id_producto']);?>
                        <div class="form-group mt-3">
                            <?php echo form_submit('Actualizar', 'Actualizar', "class='btn btn-primary'");?>
                        </div>
                        
                        <?php echo form_close();?>
                  
                    </div>
           </div>
    </div>
</Section>
</Section>
    