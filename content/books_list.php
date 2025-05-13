<?php
  $consulta="select book.id, isbn, titulo, autor.nombre, tipo.tipo, lenguaje.lenguaje, stock, precio
            from book
            inner join tipo on book.tipo=tipo.id
            inner join lenguaje on book.idioma = lenguaje.id
            inner join autor on book.autor = autor.id order by titulo";
  $result=bd_consulta($consulta);
  $i=0;
 ?>
  <table>
    <tr >
      <th>#</th><th>ISBN</th><th id="titulo">Título</th><th>Autor</th><th>Tipo</th><th>Lenguaje</th><th>Stock</th><th>Precio</th><th><a href="index.php?op=11">+ &#128218;</a></th><th></th>
    </tr>
<?php   while($row=mysqli_fetch_assoc($result)){
          $i++;
         ?>
          <tr >
            <td><?= $i ?></td><td><?=  $row['isbn'] ?></td><td><?php echo $row['titulo'] ?></td><td><?= $row['nombre'] ?></td>
            <td><?php echo $row['tipo'] ?></td><td><?= $row['lenguaje'] ?></td><td><?php $row['stock'] ?></td><td><?php echo $row['precio'] ?></td><td><a href="index.php?op=13&id=<?= $row['id'] ?>">&#128465;</a></td><td><a href="index.php?op=12&id=<?= $row['id'] ?>">&#9997;&#127995;</a></td>
          </tr>
<?php } ?>
    <tr >
      <td></td><td></td><td>El total de filas es <?= $i ?></td>
      <td>
      </td>
      <td></td><td></td><td></td><td></td><td><a href="#"></a></td><td><a href="#"></a></td>
    </tr>
  </table>
