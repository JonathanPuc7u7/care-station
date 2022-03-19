<?php
    $conexion = mysqli_connect("localhost","root","","carestation","3306");
    mysqli_set_charset($conexion,"utf8");

    $nombre = $_POST['nombre'];
    $temperatura = $_POST['temperatura'];
    $humedad = $_POST['humedad'];
    $humedad_suelo = $_POST['humedad_suelo'];
    $uv = $_POST['uv'];

    $crear = "INSERT INTO `carestation`.`nodes` (`nombre_nodo`, `temp`, `uv`, `hum`, `hum_suelo`)
            VALUES ('$nombre', '$temperatura', '$humedad', '$humedad_suelo', '$uv');";
    
    $resultado=mysqli_query($conexion,$crear);

    if($resultado){
        ?>
        <?php
        include("alta-nodo.php")
        ?>
        <script>
            alert("SE REGISTRO EL NUEVO NODO")
        </script>
        <?php
    }else{
        ?>
        <?php
        include("alta-nodo.php")
        ?>
        <script>
            alert("FAVOR DE VALIDAR LOS DATOS")
        </script>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>