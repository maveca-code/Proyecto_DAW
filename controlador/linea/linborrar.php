<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    $consulta="DELETE FROM linea WHERE id = '$idlinea'";
    $resultado = $conexion -> query($consulta);
    header("Location:../../modelo/linea/linprincipal.php");
?>

