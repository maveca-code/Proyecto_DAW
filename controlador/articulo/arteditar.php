<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    if(empty($idarticulo)){//si el id de la zona no esta definido o es nula nos indica que lo pongamos.
        echo "Indique el Id y los campos a modificar.";
        echo "<br><a href='../../modelo/articulo/artprincipal.php'>Volver al formulario...</a>";
    }else{//Pongo todas las opciones de modificación de la tabla.
        //Actualizo todos los campos
       if(!empty($producto) && !empty($artobs)){
          $consulta = "UPDATE articulo SET Articulo = '$producto', Observaciones = '$artobs' WHERE Id = '$idarticulo'"; 
        //Actualizo solo articulo  
       }else if(!empty($producto) && empty($artobs)){
         $consulta = "UPDATE articulo SET Articulo = '$producto' WHERE Id = '$idarticulo'";
        //Actualizo solo observaciones 
       }else{
           $consulta = "UPDATE articulo SET Observaciones = '$artobs'  WHERE Id = '$idarticulo'"; 
       } 
	   
	   //guardamos el resultado de la consulta y volvemos a la pagina del formulario
        $resultado = $conexion -> query($consulta);
        header("Location:../../modelo/articulo/artprincipal.php");
    }
	
	 
?>   