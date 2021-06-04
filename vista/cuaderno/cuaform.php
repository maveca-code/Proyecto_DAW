<!DOCTYPE html>
<?php
    session_start();
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    include '../../controlador/funciones.php';
?>

<html>
    <head>
        <title>Cuaderno de campo</title>
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
            <form id='datos' method="POST" action=""  onsubmit="return validarCuaderno();">
                <fieldset>
                    <legend class="texto">Mantenimiento de cuaderno</legend>
                    <div class="Registro">
                        <div id="oculto">
                            <span class="fontawesome-user"></span>
                            <input type="text" id="id" name="idcuaderno" value="<?php echo $idcuaderno;?>" placeholder="*Id">  
                        </div>
  
                        <span class="fontawesome-home"></span>
                        <?php
                        //La consulta nos sacara el id  y el paraje de la finca
                           $consulta="SELECT id, paraje FROM finca"; 
                           saca_menu_desplegable($consulta,$cuaidfinca, '*Finca'); 
                        ?>
                    
                        <span class="fontawesome-user"></span>
                        <?php
                        //La consulta nos sacara el id del agricultor, concatenara el nombre de la zona y el apodo del agricultor y los ordenara por el apodo
                            $consulta="SELECT a.id, CONCAT(z.zona,' ',a.apodo) AS apodo FROM agricultor a JOIN zona z ON z.id=a.zona ORDER BY apodo"; 
                            saca_menu_desplegable($consulta,$cuaidagricultores, '*Agricultor');
                        ?>
                    
                        <span class="fontawesome-eye-open"></span>
                        <input type="text" name="cuaobs" id="cuaobs" maxlength="255" value="<?php echo $cuaobs;?>" placeholder="Observaciones">
                    </div>
                    <div class="botones">
                        <input type='radio' id="añadir" name='cuaaccion' class="mostrarId" value='1'><label for="añadir"><span></span>A&ntilde;adir </label>
                        <input type='radio' id="buscar" name='cuaaccion' class="mostrarId" value='2'><label for="buscar"><span></span>Buscar</label><br>
                        <input type='radio' id="ver" name='cuaaccion' class="mostrarId" value='3'><label for="ver"><span></span>Ver fichero </label> 
                        <input type='radio' id="editar" name='cuaaccion' class="mostrarId" value='4'><label for="editar"><span></span>Editar</label><br> 
                        <input type='radio' id="borrar" name='cuaaccion' class="mostrarId" value='5'><label for="borrar"><span></span>Borrar</label>
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