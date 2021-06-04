<!DOCTYPE html>
<?php
    session_start();
    include '../../controlador/funciones.php';
?>

<html>
    <head>
        <title>Parte de incidencias</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="../../controlador/funciones.js"></script>
        <script type="text/javascript" src="../../controlador/calendario.js"></script>
        <link rel="stylesheet" type="text/css" href="../../vista/css/form.css">
        
    </head>
    <body>
        <?php
            echo '<div class="sesion">Hola '.$_SESSION['usuario'].' &nbsp;&nbsp; <a href="../../controlador/logout.php">Cerrar Sesi&oacute;n</a></div>';
        ?>
        <div id='form'>
            <form id='datos' name="parte" method="POST" action="" onsubmit="return validarParte();">
                <fieldset>
                    <legend class="texto">Mantenimiento de Incidencias</legend>
                    <div class="Registro">
                        <div id="oculto">
                            <span class="fontawesome-user"></span>
                            <input type="text" id="id" name="idparte" value="<?php echo $idparte;?>"placeholder="*Id">  
                        </div>
                        
                    
                        <span class="fontawesome-calendar"></span>
                        <input type="text" name="parfecha" id="parfecha" onclick="muestraCalendario('','parte','parfecha')" value="<?php @$parfecha=mysql_normal(@$parfecha);echo @$parfecha;?>"placeholder="*Fecha">

                        <span class="fontawesome-file-alt"></span>
                        <input type="text" name="incidencia" id="incidencia" maxlength="255" value="<?php echo $incidencia;?>"placeholder="*Incidencia">
                    
                        <span class="fontawesome-file-alt"></span>
                        <input type="text" name="solucion" id="solucion" maxlength="255" value="<?php echo $solucion;?>"placeholder="Solucion">
                    
                        <span class="fontawesome-eye-open"></span>
                        <input type="text" name="parobs" id="parobs" maxlength="255" value="<?php echo $parobs;?>"placeholder="Observaciones">
                    
                        <span class="fontawesome-chevron-up"></span>
                        <input type="text" name="paridloteentrada" id="paridloteentrada"  value="<?php echo $paridloteentrada;?>"placeholder="Lote entrada">
                    
                        <span class="fontawesome-chevron-down"></span>
                        <input type="text" name="paridlotesalida" id="paridlotesalida"  value="<?php echo $paridlotesalida;?>"placeholder="Lote salida">
                    </div>
                    <div class="botones">
                        <input type='radio' id="añadir" name='paraccion' class="mostrarId" value='1'><label for="añadir"><span></span>A&ntilde;adir </label>
                        <input type='radio' id="buscar" name='paraccion' class="mostrarId" value='2'><label for="buscar"><span></span>Buscar</label><br>
                        <input type='radio' id="ver" name='paraccion' class="mostrarId" value='3'><label for="ver"><span></span>Ver fichero </label> 
                        <input type='radio' id="editar" name='paraccion' class="mostrarId" value='4'><label for="editar"><span></span>Editar</label><br> 
                        <input type='radio' id="borrar" name='paraccion' class="mostrarId" value='5'><label for="borrar"><span></span>Borrar</label>
                    </div>
                    <div class="Registro">
                        <input type="submit" name="enviar" value="Enviar">
                    </div>
                </fieldset>
            </form>
            <a href="../../vista/indice.php">Volver al indice</a>
        </div>
    </body>
</html>