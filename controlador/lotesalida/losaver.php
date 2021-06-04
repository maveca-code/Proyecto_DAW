<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    if(isset($_GET["vermas"])){
        $consulta="SELECT * FROM lotesalida WHERE Id >={$_GET["vermas"]} ORDER BY Id ASC LIMIT 11";
    }else{
        $consulta="SELECT * FROM lotesalida ORDER BY Id ASC LIMIT 11";
    }
    
    $resultado=$conexion->query($consulta);
    $num_filas=0;
?>
