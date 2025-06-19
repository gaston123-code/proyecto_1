<div class="d-flex flex-column min-vh-100">

<div class="container-fluid text-center" style="background-color:rgb(255, 255, 255); padding: 50px 100px 40px;">
  <h1 style="color: rgb(0, 0, 0); font-weight: 500;">Listado de Productos</h1>

  <form action="<?= base_url('gestionar') ?>" method="get" class="mb-3">
    <input type="text" name="buscar" placeholder="Buscar producto" value="<?= isset($_GET['buscar']) ? esc($_GET['buscar']) : '' ?>" />
    <button type="submit" class="btn btn-primary">Buscar</button>
  </form>
</div>

<div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Precio</th>
      <th scope="col">Stock</th>
      <th scope="col">categoria</th>
      <th scope="col">genero</th>
      <th scope="col">marca</th>
      <th scope="col">imagen</th>
      <th scope="col">editar</th>
      <th scope="col">Activar/eliminar</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php foreach($producto as $row){ ?>
    <tr>
        <td><?php echo $row['nombre_producto'];?></td>
        <td><?php echo $row['descrpcion_producto'];?></td>
        <td><?php echo "$"; echo $row['precio_producto'];?></td>
        <td><?php echo $row['stock_producto'];?></td>
        <td><?php echo $row['descripcion_categoria'];?></td>
        <td><?php echo $row['descripcion_genero'];?></td>
        <td><?php echo $row['descripcion_marca'];?></td>
        
        <td><img src="<?php echo base_url('assets/uploads/'.$row['imagen_producto']);?>" alt=""height="100" width="100"/></td>
        <td>
            <a class="btn btn-primary" href="<?php echo base_url('editar/'.$row['id_producto']);?>">Editar </a></td>
        <?php
        if($row['estado_producto']==1) {?>
        <td><a class="btn btn-danger" href="<?php echo base_url('eliminar/'.$row['id_producto']);?>">Eliminar</a></td>
        <?php } else{
            ?>
            <td><a class="btn btn-success" href="<?php echo base_url('activar/'.$row['id_producto']);?>">Activar</a></td>
            <?php } ?>
        </tr>
            <?php }?>
        </tbody>
  </tbody>
</table>
</div>
</div>