<h1 class="text-center">Lista de detalles</h1>

<?php if (!empty($cliente)) : ?>
  <div class="mb-4">
    <p><strong>Cliente:</strong> <?= esc($cliente['nombre_registro'] . ' ' . $cliente['apellido_registro']) ?></p>
    <p><strong>Correo:</strong> <?= esc($cliente['correo_registro']) ?></p>
    <p><strong>DNI:</strong> <?= esc($cliente['dni_registro']) ?></p>
    <p><strong>Domicilio:</strong> <?= esc($cliente['domicilio_registro']) ?></p>
    <p><strong>Fecha de compra:</strong> <?= esc($cliente['venta_fecha']) ?></p>
    <p><strong>Total de la venta:</strong> <?= esc($cliente['venta_total_compra']) ?></p>
  </div>
<?php endif; ?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Venta</th>
      <th scope="col">Producto</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">

    <?php foreach ($detalle as $item) : ?>
      <tr>
        <td><?= esc($item['id_venta']) ?></td>
        <td><?= esc($item['nombre_producto']) ?></td>
        <td><?= esc($item['detalle_cantidad']) ?></td>
        <td><?= esc($item['detalle_precio']) ?></td>
      </tr>
    <?php endforeach; ?>

    <tr>
      <td colspan="4">
        <?php if (session('perfil') == 1): ?>
          <a class="btn btn-secondary" href="<?= base_url('lista-venta'); ?>">Volver atrás</a>
        <?php else: ?>
          <a class="btn btn-secondary" href="<?= base_url('lista-venta-cliente'); ?>">Volver atrás</a>
        <?php endif; ?>
      </td>
    </tr>
    
  </tbody>
</table>
