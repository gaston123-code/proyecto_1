
<section class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-6 p-5 bg-black justify-content-center mt-5" style="margin-bottom: 40px; color: white">
<Section class="container-fluid ">
    <div class="row justify-content-center ">
        <div class="col-4 bg-black justify-content-center" style="width: 100%"></div>
                  <h1 class="text-center" style="padding-bottom: 20px">Agregar producto</h1>
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

                    <?php echo form_open_multipart('insertar_producto') ?>

                    <div class="form-group" style="padding-bottom: 10px">
                      <label for="nombre">Nombre</label>
                      <?php echo form_input(['name'=>'nombre','id'=>'nombre','class'=>'form-control','placeholder'=>'ingrese el nombre del producto','value'=>set_value('nombre')]);?>
                    </div>
                    <div class="form-group" style="padding-bottom: 10px">
                      <label for="precio">Precio</label>
                      <?php echo form_input(['name'=>'precio','id'=>'precio','class'=>'form-control','placeholder'=>'ingrese el precio del producto','value'=>set_value('precio')]);?>
                    </div>
                    <div class="form-group" style="padding-bottom: 10px">
                      <label for="descripcion">Descripción</label>
                      <?php echo form_input(['name'=>'descripcion','id'=>'descripcion','class'=>'form-control','placeholder'=>'ingrese la descripcion del producto','value'=>set_value('descripcion')]);?>
                    </div>
                    <div class="form-group" style="padding-bottom: 10px">
                      <label for="stock">Stock</label>
                      <?php echo form_input(['name'=>'stock','id'=>'stock','class'=>'form-control','placeholder'=>'ingrese el stock del producto','value'=>set_value('stock')]);?>
                    </div>
                    <div class="form-group" style="padding-bottom: 10px">
                      <label for="imagen">Imagen</label><br>
                      <?php echo form_input(['name'=>'imagen','id'=>'imagen','type'=>'file','value'=>set_value('imagen')]);?>
                    </div>
                    <div class="form-group" style="padding-bottom: 10px">
                      <label for="categoria">Categoria</label>
                      <?php 
                        $lista_categoria['0']='Seleccione categoria';
                        foreach($categorias as $row){
                          $id_categoria=$row['id_categoria'];
                          $descripcion_categoria=$row['descripcion_categoria'];
                          $lista_categoria[$id_categoria]=$descripcion_categoria;
                        }
                        echo form_dropdown('categoria', $lista_categoria, '0', 'class="form-control"');
                      ?>
                    </div>
                    <div class="form-group" style="padding-bottom: 10px">
                      <label for="genero">Genero</label>
                      <?php 
                        $lista_genero['0']='Seleccione el genero';
                        foreach($generos as $row){
                          $id_genero=$row['id_genero'];
                          $descripcion_genero=$row['descripcion_genero'];
                          $lista_genero[$id_genero]=$descripcion_genero;
                        }
                        echo form_dropdown('genero', $lista_genero, '0', 'class="form-control"');
                      ?>
                    </div>
                    <div class="form-group" style="padding-bottom: 10px">
                      <label for="marca">Marca</label>
                      <?php 
                        $lista_marca['0']='Seleccione la marca';
                        foreach($marcas as $row){
                          $id_marca=$row['id_marca'];
                          $descripcion_marca=$row['descripcion_marca'];
                          $lista_marca[$id_marca]=$descripcion_marca;
                        }
                        echo form_dropdown('marca', $lista_marca, '0', 'class="form-control"');
                      ?>
                    </div>
                    <div class="form-group mt-3" style="color: white">
                        <?php echo form_submit('Agregar', 'Agregar', "class='btn btn-primary'");?>
                    </div>
                    
                      <?php echo form_close();?>
                  
                    </div>
           </div>
    </div>
</Section>
</Section>
    