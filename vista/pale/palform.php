<!DOCTYPE html>
<?php
    session_start();
    include '../../controlador/funciones.php';
?>

<html>
    <head>
        <title>Pales</title>
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
            <form id='datos' name="pale" method="POST" action="" onsubmit="return validarPale();">
                <fieldset>
                    <legend class="texto">Mantenimiento de pales</legend>
                    <div class="Registro">
                        <div id="oculto">
                            <span class="fontawesome-user"></span>
                            <input type="text" id="id" name="idpale" value="<?php echo $idpale;?>" placeholder="Id">  
                        </div>
                        
                        <span class="fontawesome-chevron-down"></span>
                        <?php
                            $consulta="SELECT losa.id, CONCAT(c.empresa,' ==> ',a.articulo) AS pedido FROM lotesalida losa JOIN "
                                    . "comprador c ON losa.idcomprador=c.id JOIN articulo a ON losa.idarticulo=a.id"
                                    . " WHERE losa.completado='0' ORDER BY c.empresa";
                            saca_menu_desplegable($consulta,$palidlotesalida, '*Lote_salida');
                        ?> 
                    
                        <span class="fa fa-balance-scale"></span>
                        <input type="text" name="bruto" id="bruto" value="<?php echo @$bruto;?>" placeholder="*Bruto">
                  
                        <span class="fa fa-balance-scale"></span>
                        <input type="text" name="tara" id="tara" value="<?php echo @$tara;?>" placeholder="*Tara">
                    
                        <span class="fontawesome-inbox"></span>
                        <input type="text" name="bultos" id="bultos" value="<?php echo @$bultos;?>" placeholder="*Bultos">
                    
                        <span class="fontawesome-lemon"></span>
                        <input type="text" name="piezas" id="piezas" value="<?php echo @$piezas;?>" placeholder="*Piezas">
                    
                        <span class="fontawesome-inbox"></span>
                        <?php
                            $consulta="SELECT id,envase FROM formato";
                            saca_menu_desplegable($consulta,$palidformato, '*Envase');
                        ?>
                    
                        <span class="fontawesome-retweet"></span>
                        <?php
                            $consulta="SELECT id,linea FROM linea";
                            saca_menu_desplegable($consulta,$palidlinea, '*Linea_envasado');
                        ?>
                    
                        <span class="fontawesome-eye-open"></span>
                        <input type="text" name=palobs" id=palobs" maxlength="255"  value="<?php echo @$palobs;?>" placeholder="Observaciones">
                    
                        <span class="fontawesome-calendar"></span>
                        <input type="text" name="palfecha" onclick="fechahoy('pale','palfecha')" ondblclick="muestraCalendario('','pale','palfecha')" value="<?php @$palfecha=mysql_normal(@$palfecha);echo @$palfecha;?>" placeholder="Fecha">
                    </div>
                    <div class="botones">
                        <input type='radio' id="añadir" name='palaccion' class="mostrarId" value='1'><label for="añadir"><span></span>A&ntilde;adir </label>
                        <input type='radio' id="buscar" name='palaccion' class="mostrarId" value='2'><label for="buscar"><span></span>Buscar</label><br>
                        <input type='radio' id="ver" name='palaccion' class="mostrarId" value='3'><label for="ver"><span></span>Ver fichero </label> 
                        <input type='radio' id="editar" name='palaccion' class="mostrarId" value='4'><label for="editar"><span></span>Editar</label><br> 
                        <input type='radio' id="borrar" name='palaccion' class="mostrarId" value='5'><label for="borrar"><span></span>Borrar</label>
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