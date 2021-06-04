<?php
    //accedo a la base de datos
    $conexion = new mysqli();//creo el objeto
    $conexion -> connect('localhost','root','','trazabilidad');//conecto con la base de datos "trazabilidad"
    
    //para que nos avise si muestra fallos la conexion
    if($conexion->connect_errno){
        echo "La conexión presenta fallos.";
        exit();
    }
    
?>

