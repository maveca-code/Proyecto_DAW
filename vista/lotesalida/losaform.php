<!DOCTYPE html>
<?php
    session_start();
    include '../../controlador/funciones.php';
?>

<html>
    <head>
        <title>Lotes de salida</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="../../controlador/funciones.js"></script>
        <script type="text/javascript" src="../../controlador/calendario.js"></script>
        <script type="text/javascript" src="../../controlador/reloj.js"></script>
        <link rel="stylesheet" type="text/css" href="../../vista/css/form.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    </head>
    <body>
        <?php
             echo '<div class="sesion">Hola '.$_SESSION['usuario'].' &nbsp;&nbsp; <a href="../../controlador/logout.php">Cerrar Sesi&oacute;n</a></div>';
        ?>
        <div id='form'>
            <form id='datos'  name="lotesalida" method="POST" action="" onsubmit="return validarLoteSalida();">
                <fieldset>
                    <legend class="texto">Mantenimiento de lote de salida</legend>
                    <div class="Registro">
                        <div id="oculto">
                          <span class="fontawesome-user"></span>
                            <input type="text" id="id" name="idlotesalida" value="<?php echo $idlotesalida;?>" placeholder="Id">  
                        </div>
                    
                        <span class="fontawesome-calendar"></span>
                        <input type="text" id="losafecha" name="losafecha" id="losafecha" ondblclick="muestraCalendario('','lotesalida','losafecha')" onclick="fechahoy('lotesalida','losafecha')" value="<?php @$losafecha=mysql_normal(@$losafecha);echo @$losafecha;?>" placeholder="*Fecha">

                        <span class="fontawesome-user"></span>
                        <?php
                            $consulta="SELECT id, empresa FROM comprador WHERE almacen='1' ORDER BY id"; 
                            saca_menu_desplegable($consulta,$losaidcompradores, '*Compradores');
                        ?>
                   
                        <span class="fontawesome-inbox"></span>
                        <?php
                            $consulta="SELECT id, articulo FROM articulo ORDER BY articulo"; 
                            saca_menu_desplegable($consulta,$losaidarticulo, '*Articulo');
                        ?>

                        <span class="fas fa-truck"></span>
                       <?php
                            $consulta="SELECT Id, Empresa FROM transportista ORDER BY Empresa"; 
                            saca_menu_desplegable($consulta,$transportista, '*Transportista');
                        ?>
 
                        <span class="fontawesome-eye-open"></span>
                        <input type="text" name=losaobs" id=losaobs" maxlength="255"  value="<?php echo @$losaobs;?>"placeholder="Observaciones">
                    </div>
                        
                    <div>
                        <input type="checkbox" name="completado" id="completado" value="1" <?php if ($completado==1){echo "checked";} ?>>
                        <label for="completado" class="botones"><span></span>Completado</label> 
                        <input type="checkbox"   name="cargado" id="cargado" value="1" <?php if ($cargado==1){echo "checked";} ?>>
                        <label for="cargado" class="botones"><span></span>Cargado</label> 
                    </div>
                        
                    <div class="botones">
                        <input type='radio' id="añadir" name='losaaccion' class="mostrarId"  value='1'><label for="añadir"><span></span>A&ntilde;adir </label>
                        <input type='radio' id="buscar" name='losaaccion' class="mostrarId"  value='2'><label for="buscar"><span></span>Buscar</label><br>
                        <input type='radio' id="ver" name='losaaccion' class="mostrarId"  value='3'><label for="ver"><span></span>Ver fichero </label> 
                        <input type='radio' id="editar" name='losaaccion' class="mostrarId"  value='4'><label for="editar"><span></span>Editar</label><br> 
                        <input type='radio' id="borrar" name='losaaccion' class="mostrarId"  value='5'><label for="borrar"><span></span>Borrar</label>
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

