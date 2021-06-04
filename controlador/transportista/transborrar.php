<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    $consulta="DELETE FROM transportista WHERE id = '$idtransportista'";
    $resultado = $conexion -> query($consulta);
    header("Location:../../modelo/transportista/transprincipal.php");
?>

