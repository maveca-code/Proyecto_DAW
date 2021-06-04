<!DOCTYPE html>
<?php
    session_start();
?>

<html>
    <head>
        <title>Fincas</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="../../controlador/funciones.js"></script>
        <link rel="stylesheet" type="text/css" href="../../vista/css/form.css">
        
    </head>
    <body>
        <?php
             echo '<div class="sesion">Hola '.$_SESSION['usuario'].' &nbsp;&nbsp; <a href="../../controlador/logout.php">Cerrar Sesi&oacute;n</a></div>';
        ?>
        <div id='form'>
            <form id='datos' method="POST" action="" onsubmit="return validarFinca();">
                <fieldset>
                    <legend class="texto">Mantenimiento de fincas</legend>
                    <div class="Registro">
                        <div id="oculto">
                            <span class="fontawesome-user"></span>
                            <input type="text" id="id" name="idfinca" value="<?php echo $idfinca;?>"placeholder="*Id">    
                        </div>
                        
                        <span class="fontawesome-globe"></span>
                        <input type="text" name="paraje" id="paraje" maxlength="50" value="<?php echo $paraje;?>"placeholder="*Paraje">
                    
                        <span class="fontawesome-road"></span>
                        <input type="text" name="ruta" id="ruta" maxlength="50" value="<?php echo $ruta;?>"placeholder="Ruta">
                   
                        <span class="fontawesome-globe"></span>
                        <input type="text" name="termino" id="termino" maxlength="50" value="<?php echo $termino;?>"placeholder="Termino">
                    
                        <span class="fontawesome-globe"></span>
                        <input type="text" name="finprovincia" id="finprovincia" maxlength="50" value="<?php echo $finprovincia;?>"placeholder="Provincia">
                    
                        <span class="fontawesome-road"></span>
                        <input type="text" name="poligono" id="poligono" maxlength="50" value="<?php echo $poligono;?>"placeholder="Poligono">
                    
                        <span class="fontawesome-home"></span>
                        <input type="text" name="parcela" id="parcela" maxlength="50" value="<?php echo $parcela;?>"placeholder="Parcela">
                    
                        <span class="fontawesome-globe"></span>
                        <input type="text" name="gps" id="gps" maxlength="100" value="<?php echo $gps;?>"placeholder="Coordenadas GPS">
                    
                        <span class="fontawesome-eye-open"></span>
                        <input type="text" name="finobs" id="finobs" maxlength="255" value="<?php echo $finobs;?>"placeholder="Observaciones">
                    </div>
                    <div class="botones">
                        <input type='radio' id="añadir" name='finaccion' class="mostrarId" value='1'><label for="añadir"><span></span>A&ntilde;adir </label>
                        <input type='radio' id="buscar" name='finaccion' class="mostrarId" value='2'><label for="buscar"><span></span>Buscar</label><br>
                        <input type='radio' id="ver" name='finaccion' class="mostrarId" value='3'><label for="ver"><span></span>Ver fichero </label> 
                        <input type='radio' id="editar" name='finaccion' class="mostrarId" value='4'><label for="editar"><span></span>Editar</label><br> 
                        <input type='radio' id="borrar" name='finaccion' class="mostrarId" value='5'><label for="borrar"><span></span>Borrar</label>
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

