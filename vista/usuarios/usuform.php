<!DOCTYPE html>
<?php
    session_start();
?>
<html>
    <head>
        <title>Usuario</title>
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
            <form id='datos' method="POST" action="" onsubmit="return validarUsuario();">
                <fieldset>
                    <legend class="texto">Mantenimiento de usuarios</legend>
                    <div class="Registro">
                        <div id="oculto">
                            <span class="fontawesome-user"></span>
                            <input type="text" id="id" name="idusuario" value="<?php echo $idusuario;?>" placeholder="*Id">
                        </div>

                        <span class="fontawesome-user"></span>
                        <input type="text" name="usuario" id="usuario" maxlength="25" value="<?php echo $usuario;?>" placeholder="*Usuario">
                        
                        <span class="fontawesome-lock"></span>
                        <input type="password" name="pass" id="pass" maxlength="25" value="<?php echo $pass;?>" placeholder="*Contrase&ntilde;a">

                        <span class="fontawesome-list-ol"></span>
                        <input type="text" name="nivel" id="nivel" value="<?php echo $nivel;?>" placeholder="*Nivel">
                  
                        <span class="fontawesome-user"></span>
                        <input type="text" name="nombrecompleto" id="nombrecompleto" maxlength="50" value="<?php echo $nombrecompleto;?>" placeholder="Nombre Completo">
                    
                        <span class="fontawesome-eye-open"></span>
                        <input type="text" name="usuobser" id="usuobser" maxlength="255" value="<?php echo $usuobser;?>" placeholder="Observaciones">
                    </div>
                    <div class="botones">
                        <input type='radio' id="añadir" name='usuaccion' class="mostrarId"  value='1'><label for="añadir"><span></span>A&ntilde;adir </label>
                        <input type='radio' id="buscar" name='usuaccion' class="mostrarId"  value='2'><label for="buscar"><span></span>Buscar</label><br>
                        <input type='radio' id="ver" name='usuaccion' class="mostrarId"  value='3'><label for="ver"><span></span>Ver fichero </label> 
                        <input type='radio' id="editar" name='usuaccion' class="mostrarId"  value='4'><label for="editar"><span></span>Editar</label><br> 
                        <input type='radio' id="borrar" name='usuaccion' class="mostrarId"  value='5'><label for="borrar"><span></span>Borrar</label>
                    </div>
                    <div class="Registro">
                        <input type="submit" id="enviar" name="enviar" value="Enviar">
                    </div>
                </fieldset>
            </form>
            <a href="../../vista/indice.php">Volver al indice</a>
        </div>
    </body>
</html>


