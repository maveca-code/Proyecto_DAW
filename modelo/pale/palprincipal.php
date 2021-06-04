<?php

    //Cojo los valores del formulario
    @$idpale=$_POST['idpale'];
    @$palidlotesalida=$_POST['*Lote_salida'];
    @$bruto=$_POST['bruto'];
    @$tara=$_POST['tara'];
    @$bultos=$_POST['bultos'];
    @$piezas=$_POST['piezas'];
    @$palidformato=$_POST['*Envase'];
    @$palobs=$_POST['palobs'];
    @$palaccion=$_POST['palaccion'];
    @$palfecha=$_POST['palfecha'];
    @$palidlinea=$_POST['*Linea_envasado'];
            
    //Según la orden seleccionada hará una orden
    switch($palaccion){
                
        case 1://Añade datos
            include '../../controlador/pale/palnuevo.php';
            break;
                
        case 2://Busca datos
            include('../../controlador/pale/palbuscar.php');
            break;
                
        case 3://Ver fichero
            include('../../vista/pale/paltabla.php');
            break;
                
        case 4://Edita fichero
            include('../../controlador/pale/paleditar.php');
            break;
                
        case 5://Borra fichero
            include('../../controlador/pale/palborrar.php');
            break;
        
        default:
            include '../../vista/pale/palform.php';
            break;
    }
?>
