<?php
  $conexion = mysqli_connect("localhost","root","","carestation","3306");
  $nuevonodo = $_GET['nodo'];
  $idnodo = $_GET['filtro'];
  
  $consulta ="SELECT*FROM nodes where id = '$idnodo'";
  $resultado=mysqli_query($conexion,$consulta);
  $filas=mysqli_num_rows($resultado);

  if($filas){
      header("location:nodo.php?nodo=$idnodo");
  }else{
      ?>
      <?php
      include("tables.php")
      ?>
      <h1 class="bad">No se encontro el nodo</h1>
      <?php
  }
  mysqli_free_result($resultado);
  mysqli_close($conexion);
?>