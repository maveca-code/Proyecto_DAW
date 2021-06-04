<!DOCTYPE html>
<?php
    session_start();
    include '../../controlador/funciones.php';
?>

<html>
    <head>
        <title>Destalles de salida</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="../../controlador/funciones.js"></script>
        <script type="text/javascript" src="../../controlador/calendario.js"></script>
        <script type="text/javascript" src="../../controlador/reloj.js"></script>
        <link rel="stylesheet" type="text/css" href="../../vista/css/form.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <?php
             echo '<div class="sesion">Hola '.$_SESSION['usuario'].' &nbsp;&nbsp; <a href="../../controlador/logout.php">Cerrar Sesi&oacute;n</a></div>';
        ?>
        <div id='form'>
            <form id='datos' name="detallesalida" method="POST" action="" onsubmit="return validarDetsalida();">
                <fieldset>
                    <legend class="texto">Mantenimiento detalles de salida</legend>
                    <div class="Registro">
                        <div id="oculto">
                            <span class="fontawesome-user"></span>
                            <input type="text" id="id" name="iddetallesalida" value="<?php echo $iddetallesalida;?>" placeholder="*Id"> 
                        </div>
                        
                    
                        <span class="fontawesome-chevron-up"></span>
                        <?php
                            $consulta="SELECT l.id, CONCAT(a.apodo,' ',f.paraje,' ',l.fechaentrada,' ',art.articulo) FROM loteentrada l JOIN "
                                    . "cuaderno c ON c.id=l.idcuaderno JOIN agricultor a ON a.id=c.idagricultor JOIN finca f ON f.id=c.idfinca "
                                    . "JOIN articulo art ON l.idarticulo=art.id WHERE l.gastado='0'";
                            saca_menu_desplegable($consulta,$detidloteentrada, '*Lote_entrada');
                        ?>   
                    
                        <span class="fontawesome-calendar"></span>
                        <input type="text" name="detfecha" id="detfecha" onclick="muestraCalendario('','detallesalida','detfecha')" value="<?php @$detfecha=mysql_normal(@$detfecha);echo @$detfecha;?>" placeholder="*Fecha">

                        <span class="fontawesome-retweet"></span>
                        <?php
                            $consulta="SELECT id,linea FROM linea";
                            saca_menu_desplegable($consulta,$detidlinea, '*Linea_envasado');
                        ?>
                   
                        <span class="fa fa-clock-o"></span>
                        <input type="text" name="horaentrada" id="horaentrada" onclick="damehora('detallesalida','horaentrada')" value="<?php echo @$horaentrada;?>" placeholder="*Hora entrada">
 
                        <span class="fa fa-clock-o"></span>
                        <input type="text" name="horasalida" id="horasalida" onclick="damehora('detallesalida','horasalida')" value="<?php echo @$horasalida;?>" placeholder="Hora salida">
              
                        <span class="fa fa-balance-scale"></span>
                        <input type="text" name="kgutilizados" id="kgutilizados" maxlength="10" value="<?php echo @$kgutilizados;?>" placeholder="Kg utilizados (aprox)">
     
                        <span class="fontawesome-eye-open"></span>
                        <input type="text" name="detobs" id="detobs" maxlength="255"  value="<?php echo @$detobs;?>" placeholder="Observaciones">
                    </div>
                    <div class="botones">
                        <input type='radio' id="añadir" name='detaccion' class="mostrarId" value='1'><label for="añadir"><span></span>A&ntilde;adir </label>
                        <input type='radio' id="buscar" name='detaccion' class="mostrarId" value='2'><label for="buscar"><span></span>Buscar</label><br>
                        <input type='radio' id="ver" name='detaccion' class="mostrarId" value='3'><label for="ver"><span></span>Ver fichero </label> 
                        <input type='radio' id="editar" name='detaccion' class="mostrarId" value='4'><label for="editar"><span></span>Editar</label><br> 
                        <input type='radio' id="borrar" name='detaccion' class="mostrarId" value='5'><label for="borrar"><span></span>Borrar</label>
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