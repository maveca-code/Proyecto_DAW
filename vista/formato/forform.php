<!DOCTYPE html>
<?php
    session_start();
?>

<html>
    <head>
        <title>Formatos</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="../../controlador/funciones.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../vista/css/form.css">
        
    </head>
    <body>
        <?php
             echo '<div class="sesion">Hola '.$_SESSION['usuario'].' &nbsp;&nbsp; <a href="../../controlador/logout.php">Cerrar Sesi&oacute;n</a></div>';
        ?>
        <div id='form'>
            <form id='datos' method="POST" action=""  onsubmit="return validarFormato();">
                <fieldset>
                    <legend class="texto">Mantenimiento de formatos</legend>
                    <div class="Registro">
                        <div id="oculto">
                            <span class="fontawesome-user"></span>
                            <input type="text" id="id" name="idformato" value="<?php echo $idformato;?>" placeholder="*Id"> 
                        </div>

                        <span class="fontawesome-inbox"></span>
                        <input type="text" name="envase" id="envase" maxlength="60" value="<?php echo $envase;?>" placeholder="*Envase">
                    
                        <span class="fa fa-balance-scale"></span>
                        <input type="text" name="peso" id="peso" maxlength="60" value="<?php echo $peso;?>" placeholder="Peso">
                    
                        <span class="fontawesome-eye-open"></span>
                        <input type="text" name="forobs" id="forobs" maxlength="255" value="<?php echo $forobs;?>" placeholder="Observaciones">
                    </div>
                    <div class="botones">
                        <input type='radio' id="añadir" name='foraccion' class="mostrarId" value='1'><label for="añadir"><span></span>A&ntilde;adir </label>
                        <input type='radio' id="buscar" name='foraccion' class="mostrarId" value='2'><label for="buscar"><span></span>Buscar</label><br>
                        <input type='radio' id="ver" name='foraccion' class="mostrarId" value='3'><label for="ver"><span></span>Ver fichero </label> 
                        <input type='radio' id="editar" name='foraccion' class="mostrarId" value='4'><label for="editar"><span></span>Editar</label><br> 
                        <input type='radio' id="borrar" name='foraccion' class="mostrarId" value='5'><label for="borrar"><span></span>Borrar</label>
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