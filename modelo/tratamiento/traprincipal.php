<?php
    require_once '../../controlador/funciones.php';
    //Cojo los valores del formulario
    @$idtratamiento=$_POST['idtratamiento'];
    @$trafecha=$_POST['trafecha'];
    @$traidcuaderno=$_POST['traidcuaderno'];
    @$tratamiento=$_POST['tratamiento'];
    @$traobs=$_POST['traobs'];

    @$traaccion=$_POST['traaccion'];
           
            
    //Según la orden seleccionada hará una orden
    switch($traaccion){
                
        case 1://Añade datos
            include '../../controlador/tratamiento/tranuevo.php';
            break;
                
        case 2://Busca datos
            include('../../controlador/tratamiento/trabuscar.php');
            break;
                
        case 3://Ver fichero
            include('../../vista/tratamiento/tratamientotabla.php');
            break;
                
        case 4://Edita fichero
            include('../../controlador/tratamiento/traeditar.php');
            break;
                
        case 5://Borra fichero
            include('../../controlador/tratamiento/traborrar.php');
            break;
                
        default:
            include '../../vista/tratamiento/traform.php';
            break;
    }
?>
