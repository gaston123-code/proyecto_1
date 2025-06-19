<div class="container-fluid text-center" style="background-color:rgb(0, 0, 0); padding: 50px 100px 40px;">
  <h1 style="color: rgb(255, 255, 255); font-weight: 1000;">Listado de Productos</h1>
</div>


<div class="container pt-5 pb-5">

<div class="row row-cols-1 row-cols-md-3 g-4">
  

    <?php foreach($producto as $row): ?>

  <div class="col">
    <div class="card h-100">
      <img src="<?= base_url('assets/uploads/' . $row['imagen_producto']) ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center"><?php echo $row['nombre_producto']; ?></h5>
        <p class="card-text text-center">Descripción: <?php echo $row['descrpcion_producto']; ?></p>
        <p class="card-text text-center">Stock: <?php echo $row['stock_producto']; ?></p>
        <p class="card-text text-center" style="font-size: 30px"><?php echo "Precio: $"; echo $row['precio_producto']; ?></p>
      </div>
      <?php if (session('login')) { 
            echo form_open('add_cart');
            echo form_hidden('id', $row['id_producto']);
            echo form_hidden('titulo', $row['nombre_producto']);
            echo form_hidden('precio', $row['precio_producto']);
            echo "<div class='d-flex justify-content-center mb-3'>";
            echo form_submit('comprar', 'Agregar al carrito',"class='btn btn-primary '");
            echo "</div>";
            echo form_close();
        } ?>
    </div>
  </div>
  
  <?php endforeach; ?>
</div>

</div>

