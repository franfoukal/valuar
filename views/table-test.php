<?php
include_once("./backend/utils/cURL.php");
$products = json_decode(cURL::get('http://localhost/valuar/v2/product'), true);

 ?>

 <div class="w-100 text-center" style="font-size:2rem">
   <a href="/valuar/addProduct" class="h-100" target="_blank"><i class="fas fa-plus-square"></i>  AGREGAR UN PRODUCTO</a>
  </ul>

 </div>
<table class="table table-sm table-hover">
  <thead class="black white-text">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Abrir</th>
      <th scope="col">Nombre Producto</th>
      <th scope='col'>Descripcion de producto</th>
      <th scope="col">Precio</th>
      <th scope='col'>Material</th>
      <th scope='col'>Cantidad en stock</th>
      <th scope='col'>Cantidad de ventas</th>
      <th scope='col'>Editar</th>
      <th scope='col'>Eliminar</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($products as $row): ?>
      <tr class='hoverable'>
        <td><?=$row['id']?></td>
        <th scope="row"><a href="/valuar/product/<?=$row['id']?>" target="_blank"><i class="fas fa-external-link-alt hoverable"></i></a></th>
        <td><?=$row['name']?></td>
        <td>"<?=$row['description']?>"</td>
        <td>$ <?=$row['price']?></td>
        <td><?=ucfirst($row['material'])?></td>
        <td>Stock: <?=$row['stock']?></td>
        <td><?=$row['sells']?></td>
        <td><a href=""><i class="fas fa-edit hoverable"></i></a></td>
        <td><a href=""><i class="fas fa-minus-circle hoverable"></i></a></td>
      </tr>
    <?php endforeach; ?>

  </tbody>
</table>
