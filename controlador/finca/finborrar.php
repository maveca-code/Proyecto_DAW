<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    $consulta="DELETE FROM finca WHERE id = '$idfinca'";
    $resultado = $conexion -> query($consulta);
    header("Location:../../modelo/finca/finprincipal.php");
?>