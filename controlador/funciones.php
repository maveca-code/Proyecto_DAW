<?php
   

    //Convierte fecha de mysql a normal
    function mysql_normal($fecha){
       if ($fecha==""){
            return $fecha;
        }else{
            preg_match( "/^([0-9]{2,4})\-([0-9]{1,2})\-([0-9]{1,2})$/", $fecha, $mifecha);
            $lafecha=$mifecha[3]."/".$mifecha[2]."/".$mifecha[1];
            return $lafecha;
        }
    }//fin funcion fecha mysql a normal



    //Convierte fecha de normal a mysql
    function normal_mysql($fecha){				//si algo esta mal quitar el IF y el ELSE
        if ($fecha==""){
            return $fecha;
        }else{
            preg_match( "/^([0-9]{1,2})\/([0-9]{1,2})\/([0-9]{2,4})$/", $fecha, $mifecha);
            $lafecha=$mifecha[3]."-".$mifecha[2]."-".$mifecha[1];
            return $lafecha;
        }
    }//fin funcion fecha normal a myql

    //Saca menu desplegable
    function saca_menu_desplegable($sentencia,$valor,$nombre){	
        $conexion = new mysqli();//creo el objeto
        $conexion -> connect('localhost','root','','trazabilidad');//conecto con la base de datos "trazabilidad"
        
        //nombre es el nombre del select dentro del formulario
        $cogidovalor=0;
        echo "<select name=$nombre>";
        $resultado=$conexion->query($sentencia);
            while ($fila=mysqli_fetch_row($resultado)){
                if ($fila[0]==$valor){
                    echo "<option selected value='$fila[0]'>$fila[1]</option>";
                    $cogidovalor=1;	
                }else{
                    echo "<option value='$fila[0]'>$fila[1]</option>";
                }
            }//fin while
            if ($cogidovalor==0){
                echo "<option value='' selected>$nombre</option>";
            }
		
            echo "</select>";
    }//fin funcion para sacar menu desplegable
?>


