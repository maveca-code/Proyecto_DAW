<?php
    //Cojo los valores del formulario
    @$idlinea=$_POST['idlinea'];
    @$linea=$_POST['linea'];
    @$linobs=$_POST['linobs'];
    @$linaccion=$_POST['linaccion'];
            
    //Según la orden seleccionada hará una orden
    switch($linaccion){
                
        case 1://Añade datos
            include '../../controlador/linea/linnuevo.php';
            break;
                
        case 2://Busca datos
            include('../../controlador/linea/linbuscar.php');
            break;
                
        case 3://Ver fichero
            include('../../vista/linea/lintabla.php');
            break;
                
        case 4://Edita fichero
            include('../../controlador/linea/lineditar.php');
            break;
                
        case 5://Borra fichero
            include('../../controlador/linea/linborrar.php');
            break;
                
        default:
            include '../../vista/linea/linform.php';
            break;
    }
?>
