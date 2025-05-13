<?php

$consulta = "SELECT DISTINCT book.id, book.titulo, autor.nombre AS nomAut, tipo.tipo, editorial.editorial, book.isbn, pais.nombre AS pais, book.dimensiones, lenguaje.lenguaje, book.precio FROM book LEFT JOIN lenguaje ON book.idioma = lenguaje.id LEFT JOIN tipo ON book.tipo = tipo.id LEFT JOIN pais ON book.pais = pais.id LEFT JOIN editorial ON book.editorial = editorial.id LEFT JOIN autor ON book.autor = autor.id order by id;";


$result = bd_consulta($consulta);
$i = 0;

?>

<table>
  <tr>
    <th>#</th>
    <th>ISBN</th>
    <th id="titulo">Título</th>
    <th>Autor</th>
    <th>Tipo</th>
    <th>Editorial</th>
    <th>País</th>
    <th>Dimensiones</th>
    <th>Lenguaje</th>
    <th>Precio</th>
    <th><a href="index.php?op=11">+ &#128218;</a></th>
    <th></th>
  </tr>
  <?php while ($row = mysqli_fetch_assoc($result)) {
    $i++; ?>
    <tr>
      <td><?= $i ?></td>
      <td><?= $row['isbn'] ?></td>
      <td><?= $row['titulo'] ?></td>
      <td><?= $row['nomAut'] ?></td>
      <td><?= $row['tipo'] ?></td>
      <td><?= $row['editorial'] ?></td>
      <td><?= $row['pais'] ?></td>
      <td><?= $row['dimensiones'] ?></td>
      <td><?= $row['lenguaje'] ?></td>
      <td><?= $row['precio'] ?></td>
      <td><a href="index.php?op=13&id=<?= $row['id'] ?>">&#128465;</a></td>
      <td><a href="index.php?op=12&id=<?= $row['id'] ?>">&#9997;&#127995;</a></td>
    </tr>
  <?php } ?>
  <tr>
    <td></td>
    <td></td>
    <td colspan="2">Total de filas: <?= $i ?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>