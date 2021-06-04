<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    $consulta="DELETE FROM detallesalida WHERE id = '$iddetallesalida'";
    $resultado = $conexion -> query($consulta);
    header("Location:../../modelo/detallesalida/detprincipal.php");
?>

