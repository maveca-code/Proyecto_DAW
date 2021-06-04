<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    $consulta="DELETE FROM articulo WHERE id = '$idarticulo'";
    $resultado = $conexion -> query($consulta);
    header("Location:../../modelo/articulo/artprincipal.php");
?>