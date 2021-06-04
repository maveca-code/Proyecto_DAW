<?php
    require_once '../../controlador/usuarios/usuver.php';
?>
<html>
    <head>
        <title>Lista de Usuarios</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link rel="stylesheet" type="text/css" href="../../vista/css/form.css">
    </head>
    <body>
        <p class="texto">Lista de Usuarios</p>
        
        <table border="1">
            <tr>
                <td>Id</td><td>Nombre</td><td>Contraseña</td><td>Nivel</td><td>Nombre Completo</td><td>Observaciones</td>
            </tr>
            <?php
                //mientras la filas no sea nulas, recorremos el array y mostramos sus datos.
                while($filas !=null){
                    echo "<tr>";
                    foreach($filas as $dato){
                        echo "<td>".$dato."</dato>";
                    }//fin foreach
                    $filas=$resultado -> fetch_assoc();
                    echo "</tr>";
                }//fin while
            ?>
        </table>
        <a href="../../modelo/usuarios/usuprincipal.php">Volver al formulario</a>
    </body>
</html>







    

