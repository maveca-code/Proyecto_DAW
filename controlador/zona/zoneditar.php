<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    if(empty($idzona)){//si el id de la zona no esta definido o es nula nos indica que lo pongamos.
        echo "Indique el Id y los campos dela zona a modificar.";
        echo "<br><a href='../../modelo/zona/zonprincipal.php'>Volver al formulario...</a>";
    }else{//Pongo todas las opciones de modificación de la tabla.
        //Actualizo todos los campos
       if(!empty($zona) && !empty($zonobs)){
          $consulta = "UPDATE zona SET Zona = '$zona', Observaciones = '$zonobs' WHERE Id = '$idzona'"; 
        //Actualizo solo zona  
       }else if(!empty($zona) && empty($zonobs)){
         $consulta = "UPDATE zona SET Zona = '$zona'WHERE Id = '$idzona'";
        //Actualizo solo observaciones 
       }else{
           $consulta = "UPDATE zona SET Observaciones = '$zonobs'WHERE Id = '$idzona'"; 
       }
		 //guardamos el resultado de la consulta y volvemos a la pagina del formulario
        $resultado = $conexion -> query($consulta);
        header("Location:../../modelo/zona/zonprincipal.php");
    }
?>    
