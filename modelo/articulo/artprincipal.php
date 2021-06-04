<?php
    //Cojo los valores del formulario
    @$idarticulo=$_POST['idarticulo'];
    @$producto=$_POST['producto'];
    @$artobs=$_POST['artobs'];
    @$artaccion=$_POST['artaccion'];
            
    //Según la orden seleccionada hará una orden
    switch($artaccion){
                
        case 1://Añade datos
            include '../../controlador/articulo/artnuevo.php';
            break;
                
        case 2://Busca datos
            include('../../controlador/articulo/artbuscar.php');
            break;
                
        case 3://Ver fichero
            include('../../vista/articulo/articulotabla.php');
            break;
                
        case 4://Edita fichero
            include('../../controlador/articulo/arteditar.php');
            break;
                
        case 5://Borra fichero
            include('../../controlador/articulo/artborrar.php');
            break;
                
        default:
            include '../../vista/articulo/artform.php';
            break;
    }
?>
