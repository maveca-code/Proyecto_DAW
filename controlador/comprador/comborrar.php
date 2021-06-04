<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    $consulta="DELETE FROM comprador WHERE id = '$idcomprador'";
    $resultado = $conexion -> query($consulta);
    header("Location:../../modelo/comprador/comprincipal.php");
?>

