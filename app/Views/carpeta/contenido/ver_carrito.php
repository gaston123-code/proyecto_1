<?php $cart = \Config\Services::cart(); ?>
<div class="container-fluid text-center" style="background-color:rgb(0, 0, 0); padding: 50px 100px 40px;">
  <h1 style="color: rgb(255, 255, 255); font-weight: 1000;">Carrito de Compras</h1>
</div>

<div class="container pt-5 pb-5">

<a href="ver_catalogo" style="color: black"><strong><i class="fa-solid fa-arrow-left"></i> Continuar comprando</strong></a><br>

<?php if ($cart->contents() == NULL) { ?>
<h2 class="text-center alert alert-danger"> Carrito esta vacio</h2 <?php } ?>

<table id="mytable" class="table table-bordred table-striped"> 
    <?php if ($cart1 = $cart->contents()): ?>
<thead>
<th>N° item</th>
<th>Nombre</th>
<th>Precio</th>
<th>Cantidad</th>
<th>Subtotal</th>
<th><a href="<?php echo base_url(relativePath: 'vaciar_carrito/all'); ?>" style="color: red"><i class="fa-solid fa-trash"></i> Vaciar carrito</a></th>
</thead>



<tbody>
<?php
$total = 0;
$i = 1;
foreach ($cart1 as $item): ?>
<tr>
<td><?php echo $i++; ?></td>
<td><?php echo $item['name']; ?></td> 
<td>$<?php echo $item['price']; ?></td> 
<td><?php echo $item['qty']; ?></td>
<td>$<?php echo $item['subtotal']; $total = $total + $item['subtotal']?></td>
<td><?php echo anchor('eliminar_item/'.$item['rowid'], 'Eliminar', ['style' => 'color: red;']); ?></td>

</tr>
<?php endforeach; ?>

<thead>
<td><strong>Total Compra: $<?php echo $total; ?><br>
<td><a href= "ventas" class="btn btn-success" role="button">Ordenar compra</a></td>
</strong></td>
</thead>


<?php endif; ?>
</tbody>
</table>

</div>