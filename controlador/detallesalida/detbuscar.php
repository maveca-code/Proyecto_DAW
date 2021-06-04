<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    include_once '../../controlador/funciones.php';
    
    if(empty($detidloteentrada) && empty($detfecha) && empty($detidlinea)){
        require_once '../../vista/detallesalida/tablasalida.php';
    }else{
        $consulta=" SELECT d.id as IdDet, d.fecha As fecha, CONCAT(agr.apodo,' ', f.paraje,' ',le.fechaentrada,' ', art.articulo) AS LoteEntrada, "
                . "le.pesobruto - le.pesotara As Neto, le.descuento AS descuento, le.observaciones AS LoteObs, li.linea AS linea, "
                . "d.horaentrada AS HoraEntrada, d.horasalida AS HoraSalida, d.kgutilizados AS Kgs, d.observaciones AS DetObs FROM detallesalida d JOIN "
                . "loteentrada le ON le.id=d.idloteentrada JOIN articulo art ON art.id=le.idarticulo JOIN cuaderno c ON c.id=le.idcuaderno JOIN "
                . "agricultor agr ON agr.id=c.idagricultor JOIN finca f ON d.id=c.idfinca JOIN linea li ON li.id=d.lineaenvasado WHERE ";
        $and='AND';
        $detfecha= normal_mysql($detfecha);
        if(!empty($detfecha) && !empty($detidloteentrada) && !empty($detidlinea)){
            $consulta.="d.fecha='$detfecha' $and d.idloteentrada='$detidloteentrada' $and d.lineaenvasado='$detidlinea'";
        }else if(!empty($detfecha) && !empty($detidloteentrada) && empty($detidlinea)){
            $consulta.="d.fecha='$detfecha' $and d.idloteentrada='$detidloteentrada'";
        }else if(!empty($detfecha) && empty($detidloteentrada) && !empty($detidlinea)){
            $consulta.="d.fecha='$detfecha' $and d.lineaenvasado='$detidlinea'";
        }else if(empty($detfecha) && !empty($detidloteentrada) && !empty($detidlinea)){
            $consulta.="d.idloteentrada='$detidloteentrada' $and d.lineaenvasado='$detidlinea'";
        }else if(!empty($detfecha) && empty($detidloteentrada) && empty($detidlinea)){
            $consulta.="d.fecha='$detfecha'";
        }else if(empty($detfecha) && !empty($detidloteentrada) && empty($detidlinea)){
             $consulta.="d.idloteentrada='$detidloteentrada'";
        }else{
             $consulta.="d.lineaenvasado='$detlinea'";
        }
 
        $resultado = $conexion -> query($consulta);//guardamos el resultado de la consulta
        $filas= mysqli_fetch_assoc($resultado);
        
        //si la consulta es igual a 0 decimos que no hay resultados
        if($filas==0){
            echo "No se han encontrado resultados.";
            echo "<br><a href='../../modelo/detallesalida/detprincipal.php'>Volver al formulario...</a>";
        }else{
            echo "Los resultados son los siguientes:";
            //Creamos un formulario con los datos que nos de, asi podremos modificar o borrar el dato indicado
            echo "<table border=1>"
                    . "<tr><td>Id</td><td>Id Lote Entrada</td><td>Fecha</td><td>Linea Envasado</td><td>Hora Entrada</td>"
                    . "<td>Hora Salida</td><td>Kg Utilizados</td><td>Observaciones</td>";
                while($filas !=null){
                    echo "<tr>";
                    foreach($filas as $dato){
                        echo "<td>".$dato."</td>";
                    }//fin foreach
                    $filas=$resultado -> fetch_assoc();
                    echo "</tr>";
                }//fin while
            echo "</table><br>";
            echo "<br><a href='../../modelo/detallesalida/detprincipal.php'> Volver al formulario...</a>";
        }//fin else
    }
?>

