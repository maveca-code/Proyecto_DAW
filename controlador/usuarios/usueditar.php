<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    if(empty($idusuario)){//si el id del usuario no esta definido o es nula nos indica que lo pongamos.
        echo "Indique el Id y los campos del usuario a modificar.";
        echo "<br><a href='../../modelo/usuarios/usuprincipal.php'>Volver al formulario...</a>";
    }else{//Pongo todas las opciones de modificación de la tabla.
        //Actualiza todos los campos
        if(!empty($usuario) && !empty($nivel) && !empty($pass) && !empty($nombrecompleto) && !empty($usuobser)){
            $consulta="UPDATE usuarios SET Usuario = '$usuario', Password = '$pass', Nivel = '$nivel', NombreCompleto = '$nombrecompleto',"
                    . "Observaciones = '$usuobser' WHERE Id = '$idusuario'";
        //Actualiza todos los campos excepto observaciones
        }else if(!empty($usuario) && !empty($nivel) && !empty($pass) && !empty($nombrecompleto) && empty($usuobser)){
            $consulta="UPDATE usuarios SET Usuario = '$usuario', Password = '$pass', Nivel = '$nivel', NombreCompleto = '$nombrecompleto' WHERE Id = '$idusuario'";
        //Actualiza todos los campos excepto NombreCompleto
        }else if(!empty($usuario) && !empty($nivel) && !empty($pass) && empty($nombrecompleto) && !empty($usuobser)){
            $consulta="UPDATE usuarios SET Usuario = '$usuario', Password = '$pass', Nivel = '$nivel', Observaciones = '$usuobser' WHERE Id = '$idusuario'";
        //Actualiza todos los campos excepto contraseña    
        }else if(!empty($usuario) && !empty($nivel) && empty($pass) && !empty($nombrecompleto) && !empty($usuobser)){
            $consulta="UPDATE usuarios SET Usuario = '$usuario', Nivel = '$nivel', NombreCompleto = '$nombrecompleto', Observaciones = '$usuobser' WHERE Id = '$idusuario'";  
        //Actualiza todos los campos excepto nivel
        }else if(!empty($usuario) && empty($nivel) && !empty($pass) && !empty($nombrecompleto) && !empty($usuobser)){
            $consulta="UPDATE usuarios SET Usuario = '$usuario', Password = '$pass', NombreCompleto = '$nombrecompleto',Observaciones = '$usuobser' WHERE Id = '$idusuario'";
        //Actualiza todos los campos excepto usuario
        }else if(empty($usuario) && !empty($nivel) && !empty($pass) && !empty($nombrecompleto) && !empty($usuobser)){
            $consulta="UPDATE usuarios SET Nivel = '$nivel', Password = '$pass', NombreCompleto = '$nombrecompleto',Observaciones = '$usuobser' WHERE Id = '$idusuario'";  
        //Actualiza todos los campos excepto NombreCompleto y Observaciones
        }else if(!empty($usuario) && !empty($nivel) && !empty($pass) && empty($nombrecompleto) && empty($usuobser)){
            $consulta="UPDATE usuarios SET Usuario = '$usuario', Password = '$pass', Nivel = '$nivel' WHERE Id = '$idusuario'";
        //Actualiza todos los campos excepto Contraseña y Observaciones
        }else if(!empty($usuario) && !empty($nivel) && empty($pass) && !empty($nombrecompleto) && empty($usuobser)){
            $consulta="UPDATE usuarios SET Usuario = '$usuario', Nivel = '$nivel', NombreCompleto = '$nombrecompleto' WHERE Id = '$idusuario'";
        //Actualiza todos los campos excepto Contraseña y NombreCompleto    
        }else if(!empty($usuario) && !empty($nivel) && empty($pass) && empty($nombrecompleto) && !empty($usuobser)){
            $consulta="UPDATE usuarios SET Usuario = '$usuario', Nivel = '$nivel', Observaciones = '$usuobser' WHERE Id = '$idusuario'";
        //Actualiza todos los campos excepto Nivel y Observaciones
        }else if(!empty($usuario) && empty($nivel) && !empty($pass) && !empty($nombrecompleto) && empty($usuobser)){
            $consulta="UPDATE usuarios SET Usuario = '$usuario', Password = '$pass', NombreCompleto = '$nombrecompleto' WHERE Id = '$idusuario'";
        //Actualiza todos los campos excepto Nivel y NombreCompleto
        }else if(!empty($usuario) && empty($nivel) && !empty($pass) && empty($nombrecompleto) && !empty($usuobser)){
            $consulta="UPDATE usuarios SET Usuario = '$usuario', Password = '$pass', Observaciones = '$usuobser' WHERE Id = '$idusuario'";
        //Actualiza todos los campos excepto Nivel y Contraseña    
        }else if(!empty($usuario) && empty($nivel) && empty($pass) && !empty($nombrecompleto) && !empty($usuobser)){
            $consulta="UPDATE usuarios SET Usuario = '$usuario', NombreCompleto = '$nombrecompleto', Observaciones = '$usuobser' WHERE Id = '$idusuario'";
        //Actualiza todos los campos excepto Usuario y Observaciones
        }else if(empty($usuario) && !empty($nivel) && !empty($pass) && !empty($nombrecompleto) && empty($usuobser)){
            $consulta="UPDATE usuarios SET Nivel = '$nivel', Password = '$pass', NombreCompleto = '$nombrecompleto' WHERE Id = '$idusuario'";
        //Actualiza todos los campos excepto Usuario y NombreCompleto    
        }else if(empty($usuario) && !empty($nivel) && !empty($pass) && empty($nombrecompleto) && !empty($usuobser)){
            $consulta="UPDATE usuarios SET Nivel = '$nivel', Password = '$pass', Observaciones = '$usuobser' WHERE Id = '$idusuario'";
        //Actualiza todos los campos excepto Usuario y Nivel    
        }else if(empty($usuario) && empty($nivel) && !empty($pass) && !empty($nombrecompleto) && !empty($usuobser)){
            $consulta="UPDATE usuarios SET Password = '$pass', NombreCompleto = '$nombrecompleto', Observaciones = '$usuobser' WHERE Id = '$idusuario'";
        //Actualiza todos los campos excepto Contraseña, NombreCompleto y Observaciones
        }else if(!empty($usuario) && !empty($nivel) && empty($pass) && empty($nombrecompleto) && empty($usuobser)){
            $consulta="UPDATE usuarios SET Usuario = '$usuario', Nivel = '$nivel' WHERE Id = '$idusuario'";
        //Actualiza todos los campos excepto Nivel, NombreCompleto y Observaciones
        }else if(!empty($usuario) && empty($nivel) && !empty($pass) && empty($nombrecompleto) && empty($usuobser)){
            $consulta="UPDATE usuarios SET Usuario = '$usuario', Password = '$pass' WHERE Id = '$idusuario'";
        //Actualiza todos los campos excepto Nivel, Contraseña y Observaciones
        }else if(!empty($usuario) && empty($nivel) && empty($pass) && !empty($nombrecompleto) && empty($usuobser)){
            $consulta="UPDATE usuarios SET Usuario = '$usuario', NombreCompleto = '$nombrecompleto' WHERE Id = '$idusuario'";
        //Actualiza todos los campos excepto Nivel, Contraseña y NombreCompleto
        }else if(!empty($usuario) && empty($nivel) && empty($pass) && empty($nombrecompleto) && !empty($usuobser)){
            $consulta="UPDATE usuarios SET Usuario = '$usuario', Observaciones = '$usuobser' WHERE Id = '$idusuario'";
        //Actualiza todos los campos excepto Usuario, NombreCompleto y Observaciones    
        }else if(empty($usuario) && !empty($nivel) && !empty($pass) && empty($nombrecompleto) && empty($usuobser)){
            $consulta="UPDATE usuarios SET Nivel = '$nivel', Password = '$pass' WHERE Id = '$idusuario'";
        //Actualiza todos los campos excepto usuario, Nivel y Observaciones
        }else if(empty($usuario) && empty($nivel) && !empty($pass) && !empty($nombrecompleto) && empty($usuobser)){
            $consulta="UPDATE usuarios SET Password = '$pass', NombreCompleto = '$nombrecompleto' WHERE Id = '$idusuario'";
        //Actualiza todos los campos excepto Usuario, Nivel y NombreCompleto
        }else if(empty($usuario) && empty($nivel) && !empty($pass) && empty($nombrecompleto) && !empty($usuobser)){
            $consulta="UPDATE usuarios SET Password = '$pass', Observaciones = '$usuobser' WHERE Id = '$idusuario'";
        //Actualiza todos los campos excepto Usuario, Contraseña y Observaciones
        }else if(empty($usuario) && !empty($nivel) && empty($pass) && !empty($nombrecompleto) && empty($usuobser)){
            $consulta="UPDATE usuarios SET Nivel = '$nivel', NombreCompleto = '$nombrecompleto' WHERE Id = '$idusuario'";
        //Actualiza todos los campos excepto Usuario, Contraseña y NombreCompleto
        }else if(empty($usuario) && !empty($nivel) && empty($pass) && empty($nombrecompleto) && !empty($usuobser)){
            $consulta="UPDATE usuarios SET Nivel = '$nivel', Observaciones = '$usuobser' WHERE Id = '$idusuario'";
        //Actualiza todos los campos excepto Usuario, Nivel y Contraseña
        }else if(empty($usuario) && empty($nivel) && empty($pass) && !empty($nombrecompleto) && !empty($usuobser)){
            $consulta="UPDATE usuarios SET NombreCompleto = '$nombrecompleto', Observaciones = '$usuobser' WHERE Id = '$idusuario'";
        //Actualiza usuario
        }else if(!empty($usuario) && empty($nivel) && empty($pass) && empty($nombrecompleto) && empty($usuobser)){
            $consulta="UPDATE usuarios SET Usuario = '$usuario' WHERE Id = '$idusuario'";
        //Actualiza nivel    
        }else if(empty($usuario) && !empty($nivel) && empty($pass) && empty($nombrecompleto) && empty($usuobser)){
            $consulta="UPDATE usuarios SET Nivel = '$nivel' WHERE Id = '$idusuario'";
        //Actualiza contraseña    
        }else if(empty($usuario) && empty($nivel) && !empty($pass) && empty($nombrecompleto) && empty($usuobser)){
            $consulta="UPDATE usuarios SET Password = '$pass' WHERE Id = '$idusuario'";
        //Actualiza NombreCompleto
        }else if(empty($usuario) && empty($nivel) && empty($pass) && !empty($nombrecompleto) && empty($usuobser)){
            $consulta="UPDATE usuarios SET NombreCompleto = '$nombrecompleto' WHERE Id = '$idusuario'";
        //Actualiza observaciones
        }else{
            $consulta="UPDATE usuarios SET Observaciones = '$usuobser' WHERE Id = '$idusuario'";
        }
        //guardamos el resultado de la consulta y volvemos a la pagina del formulario
        $resultado = $conexion -> query($consulta);
        header("Location:../../modelo/usuarios/usuprincipal.php");
    }
?>

