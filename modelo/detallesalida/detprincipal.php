<?php
    //Cojo los valores del formulario
    @$iddetallesalida=$_POST['iddetallesalida'];
    @$detidloteentrada=$_POST['*Lote_entrada'];
    @$detfecha=$_POST['detfecha'];
    @$horaentrada=$_POST['horaentrada'];
    @$horasalida=$_POST['horasalida'];
    @$kgutilizados=$_POST['kgutilizados'];
    @$detidlinea=$_POST['*Linea_envasado'];
    @$consultadetalle=$_POST['consultadetalle'];
    @$detobs=$_POST['detobs'];
    @$detaccion=$_POST['detaccion'];
            
    //Según la orden seleccionada hará una orden
    switch($detaccion){
                
        case 1://Añade datos
            include '../../controlador/detallesalida/detnuevo.php';
            break;
                
        case 2://Busca datos
            include('../../controlador/detallesalida/detbuscar.php');
            break;
                
        case 3://Ver fichero
            include('../../vista/detallesalida/tablasalida.php');
            break;
                
        case 4://Edita fichero
            include('../../controlador/detallesalida/deteditar.php');
            break;
                
        case 5://Borra fichero
            include('../../controlador/detallesalida/detborrar.php');
            break;
        
        case 6://Filtrar detalle
            include '../../controlador/detallesalida/detfiltrar.php';
                
        default:
            include '../../vista/detallesalida/detform.php';
            break;
    }
?>

