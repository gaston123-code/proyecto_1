<div class="d-flex flex-column min-vh-100">
<div class="container-fluid text-center" style="background-color:rgb(255, 255, 255); padding: 50px 100px 20px;"><h1 class="text-canter">Lista de Compras del cliente</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Cliente</th>
      <th scope="col">Fecha</th>
      <th scope="col">Total de venta</th>
      <th scope="col">Detalles</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">


    <?php foreach ($ventas as $item) : ?>
                <tr>
                    <td><?= esc($item['nombre_registro'] . ' ' . $item['apellido_registro']) ?></td>

                    <td><?= esc($item['venta_fecha']) ?></td>
                    <td><?= esc($item['venta_total_compra']) ?></td>
                    <td>
            <a class="btn btn-info" href="<?php echo base_url('ver-detalles/'.$item['id_venta']);?>">Ver detalles </a></td>
                </tr>
                
    <?php endforeach; ?>
    
  </tbody>
</table>
</div>
</div>