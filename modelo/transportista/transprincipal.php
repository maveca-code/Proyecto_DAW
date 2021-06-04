<?php
    //Cojo los valores del formulario
    @$idtransportista=$_POST['idtransportista'];
    @$empresa=$_POST['empresa'];
    @$observaciones=$_POST['transobs'];
    @$tranaccion=$_POST['tranaccion'];
            
    //Según la orden seleccionada hará una orden
    switch($tranaccion){
                
        case 1://Añade datos
            include '../../controlador/transportista/transnuevo.php';
            break;
                
        case 2://Busca datos
            include('../../controlador/transportista/transbuscar.php');
            break;
                
        case 3://Ver fichero
            include('../../vista/transportista/transtabla.php');
            break;
                
        case 4://Edita fichero
            include('../../controlador/transportista/transeditar.php');
            break;
                
        case 5://Borra fichero
            include('../../controlador/transportista/transborrar.php');
            break;
                
        default:
            include '../../vista/transportista/transform.php';
            break;
    }
?>

