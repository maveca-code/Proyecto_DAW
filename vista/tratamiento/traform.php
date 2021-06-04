<!DOCTYPE html>
<?php
    session_start();
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    include '../../controlador/funciones_calendario.php';
?>

<html>
    <head>
        <title>Tratamiento</title>
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
            <form id='datos' name="tratamiento" method="POST" action="" onsubmit="return validarTratamiento();">
                <fieldset>
                    <legend class="texto">Mantenimiento de tratamientos</legend>
                    <div class="Registro">
                        <div id="id">
                            <span class="fontawesome-user"></span>
                            <input type="text" name="idtratamiento" value="<?php echo $idtratamiento;?>" placeholder="*Id">  
                        </div>
                                            
                        <span class="fontawesome-calendar"></span>
                        <input type="text" id="trafecha" name="trafecha" onclick="muestraCalendario('','tratamiento','trafecha')" value="<?php @$trafecha=mysql_normal(@$trafecha); echo @$trafecha;?>" placeholder="*Fecha">
                       
                        <span class="fontawesome-file-alt"></span>
                        <?php
                            
                            $consulta="SELECT c.id, CONCAT(a.apodo,' ==> ',f.paraje) FROM cuaderno c JOIN agricultor a ON c.idAgricultor=a.id JOIN "
                                    . "finca f ON c.idFinca=f.id";
                            saca_menu_desplegable($consulta,$traidcuaderno, '*Cuaderno de campo');
                        ?>
                    
                        <span class="fontawesome-file-alt"></span>
                        <input type="text" name="tratamiento" id="tratamiento" maxlength="255" value="<?php echo $tratamiento;?>" placeholder="*Tratamiento">
                    
                        <span class="fontawesome-eye-open"></span>
                        <input type="text" name="traobs" id="traobs" maxlength="255" value="<?php echo $traobs;?>" placeholder="Observaciones">
                    </div>
                    <div class="botones">
                        <input type='radio' id="añadir" name='traaccion' class="mostrarId"  value='1'><label for="añadir"><span></span>A&ntilde;adir </label>
                        <input type='radio' id="buscar" name='traaccion' class="mostrarId"  value='2'><label for="buscar"><span></span>Buscar</label><br>
                        <input type='radio' id="ver" name='traaccion' class="mostrarId"  value='3'><label for="ver"><span></span>Ver fichero </label> 
                        <input type='radio' id="editar" name='traaccion' class="mostrarId"  value='4'><label for="editar"><span></span>Editar</label><br> 
                        <input type='radio' id="borrar" name='traaccion' class="mostrarId"  value='5'><label for="borrar"><span></span>Borrar</label>
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