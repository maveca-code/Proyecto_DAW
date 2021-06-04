<?php
    //Cojo los valores del formulario
    @$idlotesalida=$_POST['idlotesalida'];
    @$losafecha=$_POST['losafecha'];
    @$losaidcompradores=$_POST['*Compradores'];
    @$losaobs=$_POST['losaobs'];
    @$completado=$_POST['completado'];
    @$losaidarticulo=$_POST['*Articulo'];
    @$horacompletado=$_POST['horacompletado'];
    @$transportista=$_POST['*Transportista'];
    @$cargado=$_POST['cargado'];
    @$losaaccion=$_POST['losaaccion'];
            
    //Según la orden seleccionada hará una orden
    switch($losaaccion){
                
        case 1://Añade datos
            include '../../controlador/lotesalida/losanuevo.php';
            break;
                
        case 2://Busca datos
            include('../../controlador/lotesalida/losabuscar.php');
            break;
                
        case 3://Ver fichero
            include('../../vista/lotesalida/losatabla.php');
            break;
                
        case 4://Edita fichero
            include('../../controlador/lotesalida/losaeditar.php');
            break;
                
        case 5://Borra fichero
            include('../../controlador/lotesalida/losaborrar.php');
            break;
        
        case 6://Detallar registro
            include('../../controlador/lotesalida/losadetalle.php');
            break;
        
        case 7://Transporte
            include('../../controlador/lotesalida/losatransporte.php');
            break;
                
        default:
            include '../../vista/lotesalida/losaform.php';
            break;
    }
?>