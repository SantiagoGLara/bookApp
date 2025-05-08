<?php
// include 'bd.php';
$consulta="SELECT book.id,book.titulo,autor.nombre as nomAut,tipo.tipo,editorial.editorial,book.isbn,pais.nombre,book.dimensiones,lenguaje.lenguaje, book.precio FROM `book` LEFT JOIN lenguaje ON book.idioma=lenguaje.id LEFT JOIN tipo on book.tipo = tipo.id LEFT join pais on book.pais=pais.id left JOIN editorial on book.editorial=editorial.id left join autor on book.autor=autor.id";

$result=bd_consulta($consulta);
$i=0;
while($row=mysqli_fetch_assoc($result)){
  $i++;
  echo .$row['id'].$row['titulo'].$row['nomAut'].$row['tipo'].$row['editorial'].$row['id']."\n";
}
?>



  <table>
    <tr >
      <th>#</th><th>ISBN</th><th id="titulo">Título</th><th>Autor</th><th>Tipo</th><th>Lenguaje</th><th>Stock</th><th>Precio</th><th><a href="captura_libro2.html">+ &#128218;</a></th><th></th>
    </tr>
    <tr >
      <td>001</td><td>978-950-563-656-3</td><td>Cien años de soledad</td><td>Gabriel García Márquez</td>
      <td>Novela</td><td>Español</td><td>30</td><td>385.00</td><td><a href="#">&#128465;</a></td><td><a href="#">&#9997;&#127995;</a></td>
    </tr>
    <tr >
      <td>002</td><td>978-930-563-656-3</td><td>Alibabá y los cuarenta ladrones</td><td>Gabriel García Márquez</td>
      <td>Novela</td><td>Español</td><td>30</td><td>385.00</td><td><a href="#">&#128465;</a></td><td><a href="#">&#9997;&#127995;</a></td>
    </tr>
    <tr >
      <td>003</td><td>978-990-563-656-3</td><td>El caballo de troya</td><td>Gabriel García Márquez</td>
      <td>Novela</td><td>Español</td><td>30</td><td>385.00</td><td><a href="#">&#128465;</a></td><td><a href="#">&#9997;&#127995;</a></td>
    </tr>
    <tr >
      <td>004</td><td>978-945-563-656-3</td><td>Don Quijote de la mancha</td><td>Gabriel García Márquez</td>
      <td>Novela</td><td>Español</td><td>30</td><td>385.00</td><td><a href="#">&#128465;</a></td><td><a href="#">&#9997;&#127995;</a></td>
    </tr>
    <tr >
      <td>005</td><td>978-973-563-656-3</td><td>El Señor de los Anillos</td><td>Gabriel García Márquez</td>
      <td>Novela</td><td>Español</td><td>30</td><td>385.00</td><td><a href="#">&#128465;</a></td><td><a href="#">&#9997;&#127995;</a></td>
    </tr>
    <tr >
      <td>006</td><td>978-900-563-656-3</td><td>Dunas</td><td>Gabriel García Márquez</td>
      <td>Novela</td><td>Español</td><td>30</td><td>385.00</td><td><a href="#">&#128465;</a></td><td><a href="#">&#9997;&#127995;</a></td>
    </tr>
    <tr >
      <td></td><td></td><td>El total de filas es 6</td>
      <td>

      </td>
      <td></td><td></td><td>30</td><td>385.00</td><td><a href="#"></a></td><td><a href="#"></a></td>
    </tr>
  </table>
