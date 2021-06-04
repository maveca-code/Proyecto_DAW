<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    $consulta="DELETE FROM usuarios WHERE id = '$idusuario'";
    $resultado = $conexion -> query($consulta);
    header("Location:../../modelo/usuarios/usuprincipal.php");
?>

