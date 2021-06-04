<!DOCTYPE html>
<?php
    session_start();
    include_once '../../controlador/funciones.php';
?>

<html>
    <head>
        <title>Lote de entrada</title>
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
            <form id='datos' name="loteentrada" method="POST" action="" onsubmit="return validarLoteEntrada();">
                <fieldset>
                    <legend class="texto">Mantenimiento de Lotes de entrada</legend>
                    <div class="Registro">
                        <div id="oculto">
                            <span class="fontawesome-user"></span>
                            <input type="text" id="id" name="idloteentrada" value="<?php echo $idloteentrada;?>"placeholder="*Id">  
                        </div>
                      
                        <span class="fontawesome-calendar"></span>
                        <input type="text" name="fechaentrada" id="fechaentrada" onclick="muestraCalendario('','loteentrada','fechaentrada')" value="<?php @$fechaentrada=mysql_normal(@$fechaentrada);echo @$fechaentrada;?>"placeholder="*Fecha de entrada">
       
                        <span class="fa fa-clock-o"></span>
                        <input type="text" name="horaentrada" id="horaentrada"  onclick="damehora('loteentrada','horaentrada')" value="<?php echo @$horaentrada;?>"placeholder="*Hora entrada">
                   
                        <span class="fontawesome-user"></span>
                        <?php
                            $consulta="SELECT c.id, CONCAT(z.zona,' ',a.apodo,' ',f.paraje) AS Agricultor FROM cuaderno c JOIN "
                                    . "agricultor a ON c.idagricultor=a.id JOIN finca f ON c.idfinca=f.id JOIN zona z ON z.id=a.zona "
                                    . "ORDER BY Agricultor";
                            saca_menu_desplegable($consulta,$loenidcuaderno, '*Agricultor');
                        ?>
                
                        <span class="fontawesome-user"></span>
                        <?php
                            $consulta="SELECT id, articulo FROM articulo ORDER BY articulo";
                            saca_menu_desplegable($consulta,$loenidarticulo, '*Articulo');
                        ?>

                        <span class="fa fa-balance-scale"></span>
                        <input type="text" name="pesobruto" id="pesobruto"  value="<?php echo $pesobruto;?>"placeholder="Peso Bruto">
                   
                        <span class="fa fa-balance-scale"></span>
                        <input type="text" name="pesotara" id="pesotara"  value="<?php echo $pesotara;?>"placeholder="Peso Tara">

                        <span class="fa fa-percent"></span>
                        <input type="text" name="descuento" id="descuento"  value="<?php echo $descuento;?>"placeholder="Descuento">

                        <span class="fontawesome-inbox"></span>
                        <input type="text" name="bultos" id="bultos"  value="<?php echo $bultos;?>"placeholder="Bultos">

                        <span class="fontawesome-user"></span>
                        <input type="text" name="transportista" id="transportista" maxlength="50" value="<?php echo $transportista;?>"placeholder="Transportista">

                        <span class="fontawesome-truck"></span>
                        <input type="text" name="matricula" id="matricula" maxlength="10" value="<?php echo $matricula;?>"placeholder="Matricula">

                        <span class="fontawesome-calendar"></span>
                        <input type="text" name="fechasalida" id="fechasalida" onclick="muestraCalendario('','loteentrada','fechasalida')" value="<?php @$fechasalida=mysql_normal(@$fechasalida);echo @$fechasalida;?>"placeholder="Fecha salida">

                        <span class="fa fa-clock-o"></span>
                        <input type="text" name="horasalida" id="horasalida" onclick="damehora('loteentrada','horasalida')" value="<?php echo @$horasalida;?>"placeholder="Hora salida">

                        <span class="fontawesome-inbox"></span>
                        <input type="text" name="sureferencia" id="sureferencia" maxlength="45"  value="<?php echo @$sureferencia;?>"placeholder="Referencia">
                    
                        <span class="fontawesome-eye-open"></span>
                        <input type="text" name="loenobs" id="loenobs" maxlength="255"  value="<?php echo @$loenobs;?>"placeholder="Observaciones">
                    </div>
                    <div>
                        <input type="checkbox" name="gastado" id="gastado" value="1 <?php if (@$completado==1){echo "checked";}?>"placeholder="Gastado">
                        <label for="gastado" class="botones"><span></span>Gastado</label>
                    </div>
                    <div class="botones">
                        <input type='radio' id="añadir" name='loenaccion' class="mostrarId" value='1'><label for="añadir"><span></span>A&ntilde;adir </label>
                        <input type='radio' id="buscar" name='loenaccion' class="mostrarId" value='2'><label for="buscar"><span></span>Buscar</label><br>
                        <input type='radio' id="ver" name='loenaccion' class="mostrarId" value='3'><label for="ver"><span></span>Ver fichero </label> 
                        <input type='radio' id="editar" name='loenaccion' class="mostrarId" value='4'><label for="editar"><span></span>Editar</label><br> 
                        <input type='radio' id="borrar" name='loenaccion' class="mostrarId" value='5'><label for="borrar"><span></span>Borrar</label>
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
