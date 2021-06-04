<!DOCTYPE html>
<?php
    session_start();
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    include '../../controlador/funciones.php';
?>

<html>
    <head>
        <title>Agricultor</title>
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
            <form id='datos' method="POST" action="" onsubmit="return validarAgricultor();">
                <fieldset>
                    <legend class="texto">Mantenimiento de agricultores</legend>
                    <div class="Registro">
                        <div id="oculto">
                          <span class="fontawesome-user"></span>
                            <input type="text" id="id" name="id" value="<?php echo $idagricultor;?>" placeholder="*Id">  
                        </div>

                        <span class="fontawesome-user"></span>
                        <input type="text" name="nombre" id="nombre" maxlength="50" value="<?php echo $agrinom;?>" placeholder="Nombre">
                    
                        <span class="fontawesome-user"></span>
                        <input type="text" name="apellidos" id="apellidos" maxlength="100" value="<?php echo $agriape;?>" placeholder="Apellidos">
                    
                        <span class="fontawesome-user"></span>
                        <input type="text" name="apodo" id="apodo" maxlength="25" value="<?php echo $agriapodo;?>" placeholder="*Apodo">
                    
                        <span class="fontawesome-road"></span>
                        <?php 
                            $consulta="SELECT id, zona FROM zona ORDER BY zona"; 
                            saca_menu_desplegable($consulta,$agridzona, '*Zona');
                        ?>
                    
                        <span class="fontawesome-home"></span>
                        <input type="text" name="direccion" id="direccion" maxlength="50" value="<?php echo $agridir;?>" placeholder="Direccion">
                    
                        <span class="fontawesome-globe"></span>
                        <input type="text" name="localidad" id="localidad" maxlength="50" value="<?php echo $agrilocalidad;?>" placeholder="Localidad">
                    
                        <span class="fontawesome-globe"></span>
                        <input type="text" name="provincia" id="provincia" maxlength="50" value="<?php echo $agriprovincia;?>" placeholder="Provincia">
                    
                        <span class="fontawesome-envelope-alt"></span>
                        <input type="text" name="codigopostal" id="codigopostal"  value="<?php echo $agricodigopostal;?>" placeholder="Codigo Postal">
                    
                        <span class="fontawesome-user"></span>
                        <input type="text" name="nif" id="nif" maxlength="9" value="<?php echo $agrinif;?>" placeholder="NIF">
                    
                        <span class="fontawesome-eye-open"></span>
                        <input type="text" name="observaciones" id="observaciones" maxlength="255" value="<?php echo $agriobs;?>" placeholder="Observaciones">
                    </div>
                    <div class="botones">
                        <input type='radio' id="añadir" name='agriaccion' class="mostrarId" value='1'><label for="añadir"><span></span>A&ntilde;adir </label>
                        <input type='radio' id="buscar" name='agriaccion' class="mostrarId" value='2'><label for="buscar"><span></span>Buscar</label><br>
                        <input type='radio' id="ver" name='agriaccion' class="mostrarId" value='3'><label for="ver"><span></span>Ver fichero </label> 
                        <input type='radio' id="editar" name='agriaccion'  class="mostrarId" value='4'><label for="editar"><span></span>Editar</label><br> 
                        <input type='radio' id="borrar" name='agriaccion'  class="mostrarId" value='5'><label for="borrar"><span></span>Borrar</label>
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

