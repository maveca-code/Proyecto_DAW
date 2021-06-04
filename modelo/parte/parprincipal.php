<?php
    //Cojo los valores del formulario
    @$idparte=$_POST['idparte'];
    @$parfecha=$_POST['parfecha'];
    @$incidencia=$_POST['incidencia'];
    @$solucion=$_POST['solucion'];
    @$parobs=$_POST['parobs'];
    @$paridloteentrada=$_POST['paridloteentrada'];
    @$paridlotesalida=$_POST['paridlotesalida'];
    @$paraccion=$_POST['paraccion'];
            
    //Según la orden seleccionada hará una orden
    switch($paraccion){
                
        case 1://Añade datos
            include '../../controlador/parte/parnuevo.php';
            break;
                
        case 2://Busca datos
            include('../../controlador/parte/parbuscar.php');
            break;
                
        case 3://Ver fichero
            include('../../vista/parte/partabla.php');
            break;
                
        case 4://Edita fichero
            include('../../controlador/parte/pareditar.php');
            break;
                
        case 5://Borra fichero
            include('../../controlador/parte/parborrar.php');
            break;
                
        default:
            include '../../vista/parte/parform.php';
            break;
    }
?>


