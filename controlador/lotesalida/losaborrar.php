<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    $consulta="DELETE FROM lotesalida WHERE id = '$idlotesalida'";
    $resultado = $conexion -> query($consulta);
    header("Location:../../modelo/lotesalida/losaprincipal.php");
?>

