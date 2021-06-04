<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    $consulta="DELETE FROM pale WHERE id = '$idpale'";
    $resultado = $conexion -> query($consulta);
    header("Location:../../modelo/pale/palprincipal.php");
?>

