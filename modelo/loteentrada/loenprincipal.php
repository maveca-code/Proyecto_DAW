<?php
    //Cojo los valores del formulario
    @$idloteentrada=$_POST['idloteentrada'];
    @$fechaentrada=$_POST['fechaentrada'];
    @$horaentrada=$_POST['horaentrada'];
    @$pesobruto=$_POST['pesobruto'];
    @$pesotara=$_POST['pesotara'];
    @$bultos=$_POST['bultos'];
    @$loenidarticulo=$_POST['*Articulo'];
    @$descuento=$_POST['descuento'];
    @$loenidcuaderno=$_POST['*Agricultor'];
    @$transportista=$_POST['transportista'];
    @$matricula=$_POST['matricula'];
    @$gastado=$_POST['gastado'];
    @$fechasalida=$_POST['fechasalida'];
    @$horasalida=$_POST['horasalida'];
    @$sureferencia=$_POST['sureferencia'];
    @$loenobs=$_POST['loenobs'];
    @$loenaccion=$_POST['loenaccion'];
            
    //Según la orden seleccionada hará una orden
    switch($loenaccion){
                
        case 1://Añade datos
            include '../../controlador/loteentrada/loennuevo.php';
            break;
                
        case 2://Busca datos
            include('../../controlador/loteentrada/loenbuscar.php');
            break;
                
        case 3://Ver fichero
            include('../../vista/loteentrada/loentabla.php');
            break;
                
        case 4://Edita fichero
            include('../../controlador/loteentrada/loeneditar.php');
            break;
                
        case 5://Borra fichero
            include('../../controlador/loteentrada/loenborrar.php');
            break;
                
        default:
            include '../../vista/loteentrada/loenform.php';
            break;
    }
?>