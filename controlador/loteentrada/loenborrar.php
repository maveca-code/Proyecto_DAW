<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    $consulta="DELETE FROM loteentrada WHERE id = '$idloteentrada'";
    $resultado = $conexion -> query($consulta);
    header("Location:../../modelo/loteentrada/loenprincipal.php");
?>

