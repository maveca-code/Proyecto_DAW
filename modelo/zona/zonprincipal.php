<?php
    //Cojo los valores del formulario
    @$idzona=$_POST['idzona'];
    @$zona=$_POST['zona'];
    @$zonobs=$_POST['zonobs'];
    @$zonaccion=$_POST['zonaccion'];
            
    //Según la orden seleccionada hará una orden
    switch($zonaccion){
                
        case 1://Añade datos
            include '../../controlador/zona/zonnuevo.php';
            break;
                
        case 2://Busca datos
            include('../../controlador/zona/zonbuscar.php');
            break;
                
        case 3://Ver fichero
            include('../../vista/zona/tablazon.php');
            break;
                
        case 4://Edita fichero
            include('../../controlador/zona/zoneditar.php');
            break;
                
        case 5://Borra fichero
            include('../../controlador/zona/zonborrar.php');
            break;
                
        default:
            include '../../vista/zona/zonform.php';
            break;
    }
?>
