<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    $consulta="SELECT * FROM tratamiento";
    $resultado=$conexion->query($consulta);
    $filas= mysqli_fetch_assoc($resultado);
    
?>

