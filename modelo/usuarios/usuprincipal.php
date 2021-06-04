<?php
    //Cojo los valores del formulario
    @$idusuario=$_POST['idusuario'];
    @$usuario=$_POST['usuario'];
    @$pass=$_POST['pass'];
    @$nivel=$_POST['nivel'];
    @$nombrecompleto=$_POST['nombrecompleto'];
    @$usuobser=$_POST['usuobser'];
    @$usuaccion=$_POST['usuaccion'];
            
    //Según la orden seleccionada hará una orden
    switch($usuaccion){
                
        case 1://Añade datos
            include '../../controlador/usuarios/usunuevo.php';
            break;
                
        case 2://Busca datos
            include('../../controlador/usuarios/usubuscar.php');
            break;
                
        case 3://Ver fichero
            include('../../vista/usuarios/tablausu.php');
            break;
                
        case 4://Edita fichero
            include('../../controlador/usuarios/usueditar.php');
            break;
                
        case 5://Borra fichero
            include('../../controlador/usuarios/usuborrar.php');
            break;
                
        default:
            include '../../vista/usuarios/usuform.php';
            break;
    }
?>


