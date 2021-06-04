<!DOCTYPE html>
<?php
    session_start();
?>

<html>
    <head>
        <title>Comprador</title>
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
            <form id='datos' method="POST" action="" onsubmit="return validarComprador();">
                <fieldset>
                    <legend  class="texto">Mantenimiento de compradores</legend>
                    <div class="Registro">
                        <div id="oculto">
                            <span class="fontawesome-user"></span>
                            <input type="text" id="id" name="idcomprador" value="<?php echo $idcomprador;?>" placeholder="*Id">
                        </div>
                        
                 
                        <span class="fontawesome-user"></span>
                        <input type="text" name="empresa" id="empresa" maxlength="50" value="<?php echo $empresa;?>" placeholder="*Empresa">
                    
                        <span class="fontawesome-globe"></span>
                        <input type="text" name="comdir" id="comdir" maxlength="50" value="<?php echo $comdir;?>" placeholder="Direccion">
                    
                        <span class="fontawesome-globe"></span>
                        <input type="text" name="comlocalidad" id="comlocalidad" maxlength="50" value="<?php echo $comlocalidad;?>" placeholder="Localidad">
                    
                        <span class="fontawesome-globe"></span>
                        <input type="text" name="comprovincia" id="comprovincia" maxlength="50" value="<?php echo $comprovincia;?>" placeholder="Provincia">
                    
                        <span class="fontawesome-envelope-alt"></span>
                        <input type="text" name="comcodigopostal" id="comcodigopostal"  value="<?php echo $comcodigopostal;?>" placeholder="Codigo Postal">
                    
                        <span class="fontawesome-user"></span>
                        <input type="text" name="comnif" id="comnif" maxlength="9" value="<?php echo $comnif;?>" placeholder="NIF">
                   
                        <span class="fontawesome-globe"></span>
                        <input type="text" name="compais" id="compais" maxlength="30" value="<?php echo $compais;?>" placeholder="Pais">
                   
                        <span class="fontawesome-eye-open"></span>
                        <input type="text" name="comobs" id="comobs" maxlength="255" value="<?php echo $comobs;?>" placeholder="Observaciones">
                     </div>
                    
                    <div>
                        <input type="checkbox" id="almacen" name="almacen" value="1" <?php if($almacen==1){echo "cheked";}?>>
                        <label for="almacen" class="botones"><span></span>Almacen</label> 
                    </div>
                        
                    <div class="botones">
                        <input type='radio' id="añadir" name='comaccion' class="mostrarId" value='1'><label for="añadir"><span></span>A&ntilde;adir </label>
                        <input type='radio' id="buscar" name='comaccion' class="mostrarId" value='2'><label for="buscar"><span></span>Buscar</label><br>
                        <input type='radio' id="ver" name='comaccion' class="mostrarId" value='3'><label for="ver"><span></span>Ver fichero </label> 
                        <input type='radio' id="editar" name='comaccion' class="mostrarId" value='4'><label for="editar"><span></span>Editar</label><br> 
                        <input type='radio' id="borrar" name='comaccion' class="mostrarId" value='5'><label for="borrar"><span></span>Borrar</label>
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