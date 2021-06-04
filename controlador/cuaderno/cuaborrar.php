<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    $consulta="DELETE FROM cuaderno WHERE id = '$idcuaderno'";
    $resultado = $conexion -> query($consulta);
    header("Location:../../modelo/cuaderno/cuaprincipal.php");
?>


