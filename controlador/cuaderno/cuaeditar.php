<?php

    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    if(empty($idcuaderno)){//si el id del cuaderno no esta definido o es nula nos indica que lo pongamos.
        echo "Indique el Id y los campos del cuaderno a modificar.";
        echo "<br><a href='../../modelo/cuaderno/cuaprincipal.php'>Volver al formulario...</a>";
    }else{//Modifico todos los campos
        if(!empty($cuaidfinca) && !empty($cuaidagricultores) && !empty($cuaobs)){
            $consulta="UPDATE cuaderno SET IdFinca = '$cuaidfinca', IdAgricultor = '$cuaidagricultores', Observaciones = '$cuaobser' WHERE Id = '$idcuaderno'";
        //Modifico el idagricultores y observaciones    
        }else if(empty($cuaidfinca) && !empty($cuaidagricultores) && !empty($cuaobs)){
            $consulta="UPDATE cuaderno SET IdAgricultor = '$cuaidagricultores', Observaciones = '$cuaobser' WHERE Id = '$idcuaderno'";
        //Modifico el idfinca y observaciones    
        }else if(!empty($cuaidfinca) && empty($cuaidagricultores) && !empty($cuaobs)){
            $consulta="UPDATE cuaderno SET IdFinca = '$cuaidfinca', Observaciones = '$cuaobser' WHERE Id = '$idcuaderno'";
        //Modifico el idfinca y el idagricultores    
        }else if(!empty($cuaidfinca) && !empty($cuaidagricultores) && empty($cuaobs)){
            $consulta="UPDATE cuaderno SET IdFinca = '$cuaidfinca', IdAgrigultor = '$cuaidagricultores' WHERE Id = '$idcuaderno'";
        //Modifico el idfinca  
        }else if(!empty($cuaidfinca) && empty($cuaidagricultores) && empty($cuaobs)){
            $consulta="UPDATE cuaderno SET IdFinca = '$cuaidfinca' WHERE Id = '$idcuaderno'";
        //Modifico el idagricultor  
        }else if(empty($cuaidfinca) && !empty($cuaidagricultores) && empty($cuaobs)){
            $consulta="UPDATE cuaderno SET IdAgricultor = '$cuaidagricultores' WHERE Id = '$idcuaderno'";
        //Modifico observaciones  
        }else{
           $consulta="UPDATE cuaderno SET Observaciones = '$cuaobs' WHERE Id = '$idcuaderno'"; 
        }
        
        //guardamos el resultado de la consulta y volvemos a la pagina del formulario
        $resultado = $conexion -> query($consulta);
        header("Location:../../modelo/cuaderno/cuaprincipal.php");
    }//fin else

