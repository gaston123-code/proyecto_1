<div class="d-flex flex-column min-vh-100">
<div class="container-fluid text-center" style="background-color:rgb(255, 255, 255); padding: 50px 100px 20px;">
  <h1 style="color: rgb(0, 0, 0); font-weight: 500;">Listado de Ventas</h1>
</div>

<div class="container mt-4">
    <form method="get" class="row g-3 align-items-end">
        <div class="col-md-4">
            <label for="fecha_inicio" class="form-label">Desde:</label>
            <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" value="<?= esc($_GET['fecha_inicio'] ?? '') ?>">
        </div>
        <div class="col-md-4">
            <label for="fecha_fin" class="form-label">Hasta:</label>
            <input type="date" class="form-control" name="fecha_fin" id="fecha_fin" value="<?= esc($_GET['fecha_fin'] ?? '') ?>">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </form>
</div>

<div class="container">
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
                    <td>$ <?= esc($item['venta_total_compra']) ?></td>
                    <td>
            <a class="btn btn-info" href="<?php echo base_url('ver-detalles/'.$item['id_venta']);?>">Ver detalles </a></td>
                </tr>
                
    <?php endforeach; ?>
    
  </tbody>
</table>
</div>
</div>