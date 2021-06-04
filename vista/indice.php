<?php
    //Inicio sesion y muestro el usuario que esta usando la aplicacion, y cogemos el valor de nivel 
    //para saber a que puede acceder el usuario siendo 1 el valor del administrador y 4 el del usuario que menos acceso tiene.
    session_start();
    $nivel=$_SESSION['nivel'];
?>

<html>
    <head>
        <title>Pagina principal</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type='text/css' href='../vista/css/form.css'>
    </head>

    <body>
        <?php
             echo '<div class="sesion">Hola '.$_SESSION['usuario'].' &nbsp;&nbsp; <a href="../controlador/logout.php">Cerrar Sesi&oacute;n</a></div>';
        ?>
        <h2 class="texto">P&aacute;gina principal para el control de trazabilidaz</h2>
      
        <table>
        <?php
            if($nivel=='1'){
        ?>
            <tr> 
                <td>Usuarios</td> 
                <td><a href="../modelo/usuarios/usuprincipal.php">Gesti&oacute;n Usuarios</a></td>
            <tr> 
                <td>&nbsp;</td>
            </tr>
            <tr> 
        <?php
            }//fin if nivel 1

            if($nivel<='2'){
        ?>
                <td>Compradores</td> 
                <td><a href="../modelo/comprador/comprincipal.php">Gesti&oacute;n Compradores</a></td>
            </tr>
            <tr> 
                <td>&nbsp;</td>
            </tr>
            <tr> 
                <td>Agricultores</td> 
                <td><a href="../modelo/agricultor/agriprincipal.php">Gesti&oacute;n Agricultores</a></td>
            </tr>
            <tr> 
                <td>Fincas</td>
                <td><a href="../modelo/finca/finprincipal.php">Gesti&oacute;n Fincas</a></td>
            </tr>
            <tr> 
                <td>Cuadernos de campo</td>
                <td><a href="../modelo/cuaderno/cuaprincipal.php">Gesti&oacute;n Cuadernos</a></td>
            </tr>
            <tr> 
                <td>Tratamientos</td>
                <td><a href="../modelo/tratamiento/traprincipal.php">Gesti&oacute;n Tratamientos</a></td>
            </tr>
            <tr> 
                <td>Zonas</td>
                <td><a href="../modelo/zona/zonprincipal.php">Gesti&oacute;n Zonas</a></td>
            </tr>
            <tr> 
                <td>&nbsp;</td>
            </tr>
            <tr> 
                <td>Art&iacuteculos</td>
                <td><a href="../modelo/articulo/artprincipal.php">Gesti&oacute;n Art&iacuteculos</a></td>
            </tr>
            <tr> 
                <td>Formatos</td>
                <td><a href="../modelo/formato/forprincipal.php">Gesti&oacute;n Formatos</a></td>
            </tr>
                <td>L&iacuteneas de envasado</td>
                <td><a href="../modelo/linea/linprincipal.php">Gesti&oacute;n L&iacuteneas de Envasado</a></td>
            <tr> 
                <td>Partes de incidencia</td>
                <td><a href="../modelo/parte/parprincipal.php">Gesti&oacute;n Partes de Incidencia</a></td>
            </tr>
            <tr> 
                <td>&nbsp;</td>
            </tr>
            <tr> 
        <?php
            }//fin if nivel 2
            if($nivel<='3'){
        ?>
                <td>Lotes de entrada</td>
                <td><a href="../modelo/loteentrada/loenprincipal.php">Gesti&oacute;n Lotes de entrada</a></td>
            </tr>
            <tr> 
                <td>Detalles de descarga</td>
                <td><a href="../modelo/detallesalida/detprincipal.php">Gesti&oacute;n Detalles de descarga</a></td>
            </tr>
            <tr> 
                <td>Transportista</td>
                <td><a href="../modelo/transportista/transprincipal.php">Gesti&oacute;n Transportista</a></td>
            </tr>
        <?php
	}//fin if nivel 3
        ?>
            <tr> 
                <td>&nbsp;</td>
            </tr>
        <?php
            if($nivel<='4'){
        ?>
            <tr> 
                <td>Lotes de salida</td>
                <td><a href="../modelo/lotesalida/losaprincipal.php">Gesti&oacute;n Lotes de salida</a></td>
            </tr>
            <tr> 
                <td>Pales</td>
                <td><a href="../modelo/pale/palprincipal.php">Gesti&oacute;n Pales</a></td>
            </tr>
        <?php
            }//fin if nivel 4
        ?>
        </table>
    </body>
</html>
