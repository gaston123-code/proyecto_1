<div class="d-flex flex-column min-vh-100">

<div class="container-fluid text-center" style="background-color:rgb(255, 255, 255); padding: 50px 100px 20px;">
  <h1 style="color: rgb(0, 0, 0); font-weight: 500;">Listado de Consultas</h1>
</div>

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Correo</th>
      <th scope="col">Asunto</th>
      <th scope="col">Consulta</th>
      <th scope="col-2">Leido/No leido</th>
      <th scope="col">Registrado</th>

    </tr>
  </thead>
  <tbody class="table-group-divider">


    <?php foreach ($consulta as $item) : ?>
                <tr>
                    <td><?= esc($item['id_mensaje']) ?></td>
                    <td><?= esc($item['nombreApellido_mensaje']) ?></td>
                    <td><?= esc($item['telefono_mensaje']) ?></td>
                    <td><?= esc($item['correo_mensaje']) ?></td>
                    <td><?= esc($item['asunto_mensaje']) ?></td>
                    <td><?= esc($item['consulta_mensaje']) ?></td>

                    <?php
        if($item['estado_mensaje']==1) {?>
        <td><a class="btn" href="<?php echo base_url('leer/'.$item['id_mensaje']);?>">No leido</a></td>
        <?php } else{
            ?>
            <td><a class="btn" href="<?php echo base_url('noLeer/'.$item['id_mensaje']);?>">Leido</a></td>
            <?php } ?>
            <td>
    <?= isset($item['cliente_id']) && !empty($item['cliente_id']) ? 'Registrado' : 'No registrado' ?>
</td>

                </tr>
                
    <?php endforeach; ?>
    
  </tbody>
</table>
</div>
</div>