<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    $consulta="DELETE FROM zona WHERE id = '$idzona'";
    $resultado = $conexion -> query($consulta);
    header("Location:../../modelo/zona/zonprincipal.php");
?>
