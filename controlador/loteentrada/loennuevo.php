<?php
     require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
     include_once '../../controlador/funciones.php';
     
    //Compruebo que los campos con asterisco no esten vacios
    if(empty($fechaentrada) && empty($loenidarticulo) && empty($horaentrada) && empty($loenidcuaderno)){
        echo "Los campos con * son imprescindibles.";
        echo "<br><a href='loenprincipal.php'> Volver al formulario...</a>";
    }else{
        if($horasalida==""){
            $horasalida="00:00:00";
        }
        if ($fechasalida==""){
            $fechasalida="00/00/0000";
	}
	if ($pesobruto==""){
            $pesobruto=0;
	}
	if ($pesotara==""){
            $pesotara=0;
	}
	if ($bultos==""){
            $bultos=0;
	}
	if ($descuento==""){
            $descuento=0;
	}
	if ($gastado==""){
            $gastado=0;
	}
        
        $fechaentrada= normal_mysql($fechaentrada);
        $fechasalida= normal_mysql($fechasalida);
        //Realizo la consulta si todo va bien muestra mensaje y enlace al formulario
        $consulta="INSERT INTO loteentrada (FechaEntrada, HoraEntrada, PesoBruto, PesoTara, Bultos, IdArticulo, Descuento, IdCuaderno, Transportista,"
                . "Matricula, Gastado, FechaSalida, HoraSalida, Referencia, Observaciones) VALUES ('$fechaentrada', '$horaentrada', '$pesobruto', '$pesotara', "
                . "'$bultos', '$loenidarticulo', '$descuento', '$loenidcuaderno', '$transportista', '$matricula', '$gastado', '$fechasalida', '$horasalida', "
                . "'$sureferencia', '$loenobs')";
        if($resultado=$conexion -> query($consulta)===TRUE){
           header('Location:loenprincipal.php');
        }else{
            echo "Los datos no se han almacenado correctamente <br>"; 
            echo "Error: ". $consulta. "<br>" .mysqli_errno($conexion);
        }
        
	echo "<br><a href='loenprincipal.php'> Volver al formulario...</a>";
    }
    //Cierro la conexion
    $conexion -> close();
?>
