<?php
    //Cojo los valores del formulario
    @$idcomprador=$_POST['idcomprador'];
    @$empresa=$_POST['empresa'];
    @$comdir=$_POST['comdir'];
    @$comlocalidad=$_POST['comlocalidad'];
    @$comprovincia=$_POST['comprovincia'];
    @$comcodigopostal=$_POST['comcodigopostal'];
    @$comnif=$_POST['comnif'];
    @$compais=$_POST['compais'];
    @$almacen=$_POST['almacen'];
    @$comobs=$_POST['comobs'];
    @$comaccion=$_POST['comaccion'];
            
    //Según la orden seleccionada hará una orden
    switch($comaccion){
                
        case 1://Añade datos
            include '../../controlador/comprador/comnuevo.php';
            break;
                
        case 2://Busca datos
            include('../../controlador/comprador/combuscar.php');
            break;
                
        case 3://Ver fichero
            include('../../vista/comprador/tablacom.php');
            break;
                
        case 4://Edita fichero
            include('../../controlador/comprador/comeditar.php');
            break;
                
        case 5://Borra fichero
            include('../../controlador/comprador/comborrar.php');
            break;
                
        default:
            include '../../vista/comprador/comform.php';
            break;
    }
?>
