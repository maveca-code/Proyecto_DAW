<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    if(empty($palidlotesalida) || empty($bultos) || empty($palidformato) || empty($bruto) || empty($tara) || empty($palidlinea)){
        echo "Indique el Id y los campos a modificar.";
        echo "<br><a href='../../modelo/pale/palprincipal.php'>Volver al formulario...</a>";
    }elseif($tara>=$bruto){
        echo "La tara no puede ser mayor que el peso.";
        echo "<br><a href='../../modelo/pale/palprincipal.php'>Volver al formulario...</a>";
    }else{
        $consulta="UPDATE pale SET idlotesalida='$palidlotesalida', bruto='$bruto', tara='$tara', bultos='$bultos', piezas='$piezas', "
                . "idformato='$palidformato', idlinea='$palidlinea', observaciones='$palobs' WHERE id='$idpale'";
        $resultado = $conexion -> query($consulta);
        
        //Consulta para mostrar los datos del PDF
        $consulta="SELECT c.empresa, c.direccion, c.localidad, a.articulo, p.bruto, p.tara, p.bruto - p.tara, p.bultos, p.piezas, "
                . "p.lotesalida, li.linea, l.fecha, f.envase FROM pale p JOIN lotesalida l ON l.id=p.lotesalida JOIN comprador c ON "
                . "c.id=l.idcomprador JOIN articulo a ON a.id=l.idarticulo JOIN linea li ON li.id=p.idlinea JOIN formato f ON f.id=p.idformato "
                . "WHERE p.id='$idpale'";
        $resultado = $conexion -> query($consulta);
        
        echo "<form action='palpegatina.php' method='post'>";
            while($registro=$resultado->fetch_array(MYSQLI_NUM)){
                echo "<br>Comprador: $registro[0]";
		echo "<br>Direccion: $registro[1]";
		echo "<br>Localidad: $registro[2]";
		$registro[11]=mysql_normal($registro[11]);
		echo "<br>Fecha: $registro[11]";
		echo "<br>Producto: $registro[3]";
		echo "<br>Bruto: $registro[4] kg";
		echo "<br>Tara: $registro[5] kg";
		echo "<br>Neto: $registro[6] kg";
		echo "<br>Bultos: $registro[7]";
		echo "<br>Piezas: $registro[8]";
		echo "<br>Idlotesalida: $registro[9]";
		echo "<br>Linea envasado: $registro[10]";
		echo "<br>Formato: $registro[12]";
                
                //Pasamos los valores al PDF
                echo "<input name='comprador' type='hidden' value='$registro[0]'>";
		echo "<input name='direccion' type='hidden' value='$registro[1]'>";
		echo "<input name='localidad' type='hidden' value='$registro[2]'>";
		echo "<input name='producto' type='hidden' value='$registro[3]'>";
		echo "<input name='bruto' type='hidden' value='$registro[4] kg'>";
		echo "<input name='tara' type='hidden' value='$registro[5] kg'>";
		echo "<input name='neto' type='hidden' value='$registro[6] kg'>";
		echo "<input name='bultos' type='hidden' value='$registro[7]'>";
		echo "<input name='piezas' type='hidden' value='$registro[8]'>";
		echo "<input name='idlotesalida' type='hidden' value='$registro[9]'>";
		echo "<input name='fechasalida' type='hidden' value='$registro[11]'>";
            }//fin while
            
                echo "<input name='idpale' type='hidden' value='$idpale'>";	
                echo "<input name='enviar' type='submit' id='enviar' value='Imprimir lote de salida (pale)'>";
	echo "</form>";   
        
        $consulta="SELECT c.empresa,a.articulo, p.piezas, p.lotesalida FROM pale p JOIN lotesalida l ON l.id=p.lotesalida JOIN comprador c ON "
                . "c.comprador=l.idcomprador WHERE p.id='$idpale'";
        $resultado = $conexion -> query($consulta);
        
        while($registro=$resultado->fetch_array(MYSQLI_NUM)){
            echo "<form action='paletiqueta.php' method='post'>";
                echo "<input name='comprador' type='hidden' value='$registro[0]'>";
                echo "<input name='producto' type='hidden' value='$registro[1]'>";
                echo "<input name='piezas' type='hidden' value='$registro[2]'>";
                echo "<input name='idlotesalida' type='hidden' value='$registro[3]'>"; 
        }//fin while
                echo "<input name='idpale' type='hidden' value='$idpale'>";
                echo "<input name='enviar' type='submit' id='enviar' value='Imprimir etiqueta (cajas)'>";
            echo "</form>";
            
        echo "<form action='palprincipal.php' method='post'>";
            echo "<input name='idpale' type='hidden' value='$idpale'>";
            echo "<input name='palaccion' type='hidden' value=4>";
            echo "<input name='enviar' type='submit' id='enviar' value='Datos incorrectos, editar'>";
	echo "</form>";
	echo "<br>Los datos se han almacenado correctamente";
	echo "<br><a href='../../modelo/pale/palprincipal.php'>Volver al formulario...</a>";
    }//fin else
?>

