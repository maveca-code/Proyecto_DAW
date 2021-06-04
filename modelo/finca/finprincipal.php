<?php
    //Cojo los valores del formulario
    @$idfinca=$_POST['idfinca'];
    @$paraje=$_POST['paraje']; 
    @$ruta=$_POST['ruta'];
    @$termino=$_POST['termino'];
    @$finprovincia=$_POST['finprovincia'];
    @$poligono=$_POST['poligono'];
    @$parcela=$_POST['parcela'];
    @$gps=$_POST['gps'];
    @$finobs=$_POST['finobs'];
    @$finaccion=$_POST['finaccion'];
           
            
    //Según la orden seleccionada hará una orden
    switch($finaccion){
                
        case 1://Añade datos
            include '../../controlador/finca/finnuevo.php';
            break;
                
        case 2://Busca datos
            include('../../controlador/finca/finbuscar.php');
            break;
                
        case 3://Ver fichero
            include('../../vista/finca/tablafinca.php');
            break;
                
        case 4://Edita fichero
            include('../../controlador/finca/fineditar.php');
            break;
                
        case 5://Borra fichero
            include('../../controlador/finca/finborrar.php');
            break;
                
        default:
            include '../../vista/finca/finform.php';
            break;
    }
?>
