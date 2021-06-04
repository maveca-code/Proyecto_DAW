<?php
    //Cojo los valores del formulario
    @$idcuaderno=$_POST['idcuaderno'];
    @$cuaidfinca=$_POST['*Finca'];
    @$cuaidagricultores=$_POST['*Agricultor'];
    @$cuaobs=$_POST['cuaobs'];
    @$cuaaccion=$_POST['cuaaccion'];
           
            
    //Según la orden seleccionada hará una orden
    switch($cuaaccion){
                
        case 1://Añade datos
            include '../../controlador/cuaderno/cuanuevo.php';
            break;
                
        case 2://Busca datos
            include('../../controlador/cuaderno/cuabuscar.php');
            break;
                
        case 3://Ver fichero
            include('../../vista/cuaderno/tablacuaderno.php');
            break;
                
        case 4://Edita fichero
            include('../../controlador/cuaderno/cuaeditar.php');
            break;
                
        case 5://Borra fichero
            include('../../controlador/cuaderno/cuaborrar.php');
            break;
                
        default:
            include '../../vista/cuaderno/cuaform.php';
            break;
    }
?>
