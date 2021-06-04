<?php
    //Cojo los valores del formulario
    @$idformato=$_POST['idformato'];
    @$envase=$_POST['envase'];
    @$peso=$_POST['peso'];
    @$forobs=$_POST['forobs'];
    @$foraccion=$_POST['foraccion'];
            
    //Según la orden seleccionada hará una orden
    switch($foraccion){
                
        case 1://Añade datos
            include '../../controlador/formato/fornuevo.php';
            break;
                
        case 2://Busca datos
            include('../../controlador/formato/forbuscar.php');
            break;
                
        case 3://Ver fichero
            include('../../vista/formato/fortabla.php');
            break;
                
        case 4://Edita fichero
            include('../../controlador/formato/foreditar.php');
            break;
                
        case 5://Borra fichero
            include('../../controlador/formato/forborrar.php');
            break;
                
        default:
            include '../../vista/formato/forform.php';
            break;
    }
?>


