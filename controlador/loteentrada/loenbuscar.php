<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    include_once '../../controlador/funciones.php';
    
    //Si la fecha de entrada y salida y los identificadores de cuaderno, articulo y lote de entrada estan vacios se muestra la tabla entera
    if(empty($fechaentrada) && empty($loenidcuaderno) && empty($loenidarticulo) && empty($fechasalida) && empty($idloteentrada)){
        require_once '../../vista/loteentrada/loentabla.php';
    }else{
        $consulta="SELECT l.id AS Id,l.fechaentrada AS FechaEntrada,l.horaentrada AS HoraEntrada,
	CONCAT(z.zona,' ',ag.apodo,' ',f.paraje) AS Agricultor,a.articulo AS Articulo,l.pesobruto AS Bruto,l.pesotara AS 
	Tara,l.descuento AS Descuento,l.bultos AS Bultos,l.transportista AS Transporte,l.matricula AS Matricula,l.gastado 
	AS Gastado,l.fechasalida AS Fechasalida,l.horasalida AS HoraSalida,l.referencia AS SuReferencia,l.observaciones AS Obs
        FROM loteentrada l JOIN cuaderno c ON c.id=l.idcuaderno JOIN finca f ON f.id=c.idfinca JOIN agricultor ag ON ag.id=c.idagricultor 
        JOIN articulo a ON a.id=l.idarticulo JOIN zona z ON z.id=ag.zona WHERE ";//consulta de busqueda
        $and=" and ";//se usara en caso de que haga falta añadir mas condiciones a la consulta
        $ordenar='ORDER BY FechaEntrada DESC';
        if(!empty($idloteentrada)){
            $consulta.=" l.id = '$idloteentrada $ordenar'";
        }else if(!empty($fechaentrada)){
            $fechaentrada= normal_mysql($fechaentrada);
            $consulta.=" fechaentrada = '$fechaentrada $ordenar'";
        }else if(!empty($loenidcuaderno)){
            $consulta.=" idcuaderno = '$loenidcuaderno $ordenar'";
        }else if(!empty ($loenidarticulo)){
            $consulta.=" idarticulo = '$loenidarticulo $ordenar'";
        }else{
            $fechasalida= normal_mysql($fechasalida);
            $consulta.=" fechasalida='$fechasalida'";
        }
        
        $resultado = $conexion -> query($consulta);//guardamos el resultado de la consulta
        $filas= mysqli_fetch_assoc($resultado);
       
        //si la consulta es igual a 0 decimos que no hay resultados
        if($filas==0){
            echo "No se han encontrado resultados.";
            echo "<br><a href='../../modelo/loteentrada/loenprincipal.php'>Volver al formulario...</a>";
        }else{
            echo "Los resultados son los siguientes:";
            //Creamos un formulario con los datos que nos de, asi podremos modificar o borrar el dato indicado
            echo "<table border=1>"
                    . "<tr><td>Id</td><td>Fecha Entrada</td><td>Hora Entrada</td><td>Peso Bruto</td><td>Peso Tara</td><td>Bultos</td><td>Id Articulo</td>"
                    . "<td>Descuento</td><td>Id Cuaderno</td><td>Transportista</td><td>Matricula</td><td>Gastado</td><td>Fecha Salida</td><td>Hora Salida</td>"
                    . "<td>Referencia</td><td>Observaciones</td>";
                while($filas !=null){
                    echo "<tr>";
                    foreach($filas as $dato){
                        echo "<td>".$dato."</td>";
                    }//fin foreach
                    $filas=$resultado -> fetch_assoc();
                    echo "</tr>";
                }//fin while
            echo "</table><br>";
            echo "<br><a href='../../modelo/loteentrada/loenprincipal.php'> Volver al formulario...</a>";
        }
    }//fin else
?>

