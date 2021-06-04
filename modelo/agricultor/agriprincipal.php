<?php
    //Cojo los valores del formulario
    @$idagricultor=$_POST['id'];
    @$agrinom=$_POST['nombre'];
    @$agriape=$_POST['apellidos'];
    @$agriapodo=$_POST['apodo'];
    @$agridir=$_POST['direccion'];
    @$agrilocalidad=$_POST['localidad'];
    @$agriprovincia=$_POST['provincia'];
    @$agricodigopostal=$_POST['codigopostal'];
    @$agrinif=$_POST['nif'];
    @$agridzona=$_POST['*Zona'];
    @$agriobs=$_POST['agriobs'];
    @$agriaccion=$_POST['agriaccion'];
            
    //Según la orden seleccionada hará una orden
    switch($agriaccion){
                
        case 1://Añade datos
            include '../../controlador/agricultor/agrinuevo.php';
            break;
                
        case 2://Busca datos
            include('../../controlador/agricultor/agribuscar.php');
            break;
                
        case 3://Ver fichero
            include('../../vista/agricultor/tablaagr.php');
            break;
                
        case 4://Edita fichero
            include('../../controlador/agricultor/agrieditar.php');
            break;
                
        case 5://Borra fichero
            include('../../controlador/agricultor/agriborrar.php');
            break;
                
        default:
            include '../../vista/agricultor/agriform.php';
            break;
    }
?>
   

