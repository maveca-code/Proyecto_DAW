<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    $consulta="SELECT * FROM agricultor";
    $resultado=$conexion->query($consulta);
    $filas= mysqli_fetch_assoc($resultado);
    
?>

