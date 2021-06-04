<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    include '../../controlador/funciones.php';
    
    $detfecha= normal_mysql($detfecha);
    if(empty($iddetallesalida)){
        echo "Indique el Id y los campos del cuaderno a modificar.";
        echo "<br><a href='../../modelo/detallesalida/detprincipal.php'>Volver al formulario...</a>";
    }else{
        if(!empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && !empty ($horaentrada) && !empty ($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
        $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha', lineaenvasado='$detidlinea', horaentrada='$horaentrada', horasalida='$horasalida', "
                . "kgutilizados='$kgutilizados', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && !empty ($horaentrada) && !empty ($horasalida) && !empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha', lineaenvasado='$detidlinea', horaentrada='$horaentrada', horasalida='$horasalida', "
                    . "kgutilizados='$kgutilizados' WHERE id='$iddetallesalida'";
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && !empty ($horaentrada) && !empty ($horasalida) && empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha', lineaenvasado='$detidlinea', horaentrada='$horaentrada', horasalida='$horasalida', "
                    . "observaciones='$detobs' WHERE id='$iddetallesalida'";   
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && !empty ($horaentrada) && empty ($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha', lineaenvasado='$detidlinea', horaentrada='$horaentrada', kgutilizados='$kgutilizados' "
                    . "observaciones='$detobs' WHERE id='$iddetallesalida'";
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && empty ($horaentrada) && !empty ($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha', lineaenvasado='$detidlinea', horasalida='$horasalida', kgutilizados='$kgutilizados' "
                    . "observaciones='$detobs' WHERE id='$iddetallesalida'";
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && empty($detidlinea) && !empty ($horaentrada) && !empty ($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha', horaentrada='$horaentrada', horasalida='$horasalida', "
                    . "kgutilizados='$kgutilizados', observaciones='$detobs' WHERE id='$iddetallesalida'";
        }else if(!empty ($detidloteentrada) && empty ($detfecha) && !empty($detidlinea) && !empty ($horaentrada) && !empty ($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', lineaenvasado='$detidlinea', horaentrada='$horaentrada', horasalida='$horasalida', "
                 . "kgutilizados='$kgutilizados', observaciones='$detobs' WHERE id='$iddetallesalida'";
        }else if(empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && !empty ($horaentrada) && !empty ($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET fecha='$detfecha', lineaenvasado='$detidlinea', horaentrada='$horaentrada', horasalida='$horasalida', "
                    . "kgutilizados='$kgutilizados', observaciones='$detobs' WHERE id='$iddetallesalida'";
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && !empty ($horaentrada) && !empty ($horasalida) && empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha', lineaenvasado='$detidlinea', horaentrada='$horaentrada', "
                    . "horasalida='$horasalida' WHERE id='$iddetallesalida'";
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && !empty ($horaentrada) && empty ($horasalida) && !empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha', lineaenvasado='$detidlinea', horaentrada='$horaentrada', "
                    . "kgutilizados='$kgutilizados' WHERE id='$iddetallesalida'";
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && empty ($horaentrada) && !empty ($horasalida) && !empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha', lineaenvasado='$detidlinea', horasalida='$horasalida', "
                    . "kgutilizados='$kgutilizados' WHERE id='$iddetallesalida'";
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && empty($detidlinea) && !empty ($horaentrada) && !empty ($horasalida) && !empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha', horaentrada='$horaentrada', horasalida='$horasalida', "
                    . "kgutilizados='$kgutilizados' WHERE id='$iddetallesalida'";
        }else if(!empty ($detidloteentrada) && empty ($detfecha) && !empty($detidlinea) && !empty ($horaentrada) && !empty ($horasalida) && !empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', lineaenvasado='$detidlinea', horaentrada='$horaentrada', horasalida='$horasalida', "
                    . "kgutilizados='$kgutilizados' WHERE id='$iddetallesalida'";
        }else if(empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && !empty ($horaentrada) && !empty ($horasalida) && !empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET fecha='$detfecha', lineaenvasado='$detidlinea', horaentrada='$horaentrada', horasalida='$horasalida', "
                    . "kgutilizados='$kgutilizados' WHERE id='$iddetallesalida'";
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && !empty ($horaentrada) && empty ($horasalida) && empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha', lineaenvasado='$detidlinea', horaentrada='$horaentrada', "
                    . "observaciones='$detobs' WHERE id='$iddetallesalida'";    
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && empty ($horaentrada) && !empty ($horasalida) && empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha', lineaenvasado='$detidlinea', horasalida='$horasalida', "
                    . "observaciones='$detobs' WHERE id='$iddetallesalida'";
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && empty($detidlinea) && !empty ($horaentrada) && !empty ($horasalida) && empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha', horaentrada='$horaentrada', horasalida='$horasalida', "
                    . "observaciones='$detobs' WHERE id='$iddetallesalida'";
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && !empty ($horaentrada) && !empty ($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha', lineaenvasado='$detidlinea', horaentrada='$horaentrada', horasalida='$horasalida', "
                    . "kgutilizados='$kgutilizados', observaciones='$detobs' WHERE id='$iddetallesalida'";
        }else if(!empty ($detidloteentrada) && empty ($detfecha) && !empty($detidlinea) && !empty ($horaentrada) && !empty ($horasalida) && empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', lineaenvasado='$detidlinea', horaentrada='$horaentrada', horasalida='$horasalida', "
                    . "observaciones='$detobs' WHERE id='$iddetallesalida'";
        }else if(empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && !empty ($horaentrada) && !empty ($horasalida) && empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET fecha='$detfecha', lineaenvasado='$detidlinea', horaentrada='$horaentrada', horasalida='$horasalida', "
                    . "observaciones='$detobs' WHERE id='$iddetallesalida'";
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && empty ($horaentrada) && empty ($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha', lineaenvasado='$detidlinea', kgutilizados='$kgutilizados', "
                    . "observaciones='$detobs' WHERE id='$iddetallesalida'";
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && empty($detidlinea) && !empty ($horaentrada) && empty ($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha', horaentrada='$horaentrada', kgutilizados='$kgutilizados', "
                    . "observaciones='$detobs' WHERE id='$iddetallesalida'";
        }else if(!empty ($detidloteentrada) && empty ($detfecha) && !empty($detidlinea) && !empty ($horaentrada) && empty ($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', lineaenvasado='$detidlinea', horaentrada='$horaentrada', kgutilizados='$kgutilizados', "
                    . "observaciones='$detobs' WHERE id='$iddetallesalida'";
        }else if(empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && !empty ($horaentrada) && empty ($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET fecha='$detfecha', lineaenvasado='$detidlinea', horaentrada='$horaentrada', kgutilizados='$kgutilizados', "
                    . "observaciones='$detobs' WHERE id='$iddetallesalida'";  
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && empty($detidlinea) && empty ($horaentrada) && !empty ($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha', horasalida='$horasalida',  kgutilizados='$kgutilizados', "
                    . "observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && empty ($detfecha) && !empty($detidlinea) && empty ($horaentrada) && !empty ($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', lineaenvasado='$detidlinea', horasalida='$horasalida', "
                    . "kgutilizados='$kgutilizados', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && empty ($horaentrada) && !empty ($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET fecha='$detfecha', lineaenvasado='$detidlinea', horasalida='$horasalida', "
                    . "kgutilizados='$kgutilizados', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && empty ($detfecha) && empty($detidlinea) && !empty ($horaentrada) && !empty ($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', horaentrada='$horaentrada', horasalida='$horasalida', "
                    . "kgutilizados='$kgutilizados', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && !empty ($detfecha) && empty($detidlinea) && !empty ($horaentrada) && !empty ($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET fecha='$detfecha', horaentrada='$horaentrada', horasalida='$horasalida', kgutilizados='$kgutilizados', "
                    . "observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && !empty ($horaentrada) && empty ($horasalida) && empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha', lineaenvasado='$detidlinea', horaentrada='$horaentrada' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && empty ($horaentrada) && !empty ($horasalida) && empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha', lineaenvasado='$detidlinea', horasalida='$horasalida' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && empty($detidlinea) && !empty ($horaentrada) && !empty ($horasalida) && empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha', horaentrada='$horaentrada', horasalida='$horasalida' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && empty ($detfecha) && !empty($detidlinea) && !empty ($horaentrada) && !empty ($horasalida) && empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', lineaenvasado='$detidlinea', horaentrada='$horaentrada', horasalida='$horasalida' WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && !empty ($horaentrada) && !empty ($horasalida) && empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET fecha='$detfecha', lineaenvasado='$detidlinea', horaentrada='$horaentrada', horasalida='$horasalida' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && empty ($horaentrada) && empty ($horasalida) && empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha', lineaenvasado='$detidlinea', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && empty($detidlinea) && !empty ($horaentrada) && empty ($horasalida) && empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha',  horaentrada='$horaentrada', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && empty ($detfecha) && !empty($detidlinea) && !empty ($horaentrada) && empty ($horasalida) && empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', lineaenvasado='$detidlinea', horaentrada='$horaentrada', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && !empty ($horaentrada) && empty ($horasalida) && empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET fecha='$detfecha', lineaenvasado='$detidlinea', horaentrada='$horaentrada', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && empty ($horaentrada) && empty ($horasalida) && !empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha', lineaenvasado='$detidlinea', kgutilizados='$kgutilizados' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && empty($detidlinea) && empty ($horaentrada) && empty ($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha', kgutilizados='$kgutilizados', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && empty ($detfecha) && !empty($detidlinea) && empty ($horaentrada) && empty ($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', lineaenvasado='$detidlinea', kgutilizados='$kgutilizados' observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && empty ($horaentrada) && empty ($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET fecha='$detfecha', lineaenvasado='$detidlinea', kgutilizados='$kgutilizados' observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && empty($detidlinea) && empty($horaentrada) && !empty ($horasalida) && !empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha', horasalida='$horasalida', kgutilizados='$kgutilizados' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && empty($detidlinea) && empty ($horaentrada) && !empty ($horasalida) && empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha', horasalida='$horasalida', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && empty ($detfecha) && empty($detidlinea) && empty ($horaentrada) && !empty ($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', horasalida='$horasalida', kgutilizados='$kgutilizados', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && !empty ($detfecha) && empty($detidlinea) && empty ($horaentrada) && !empty ($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET fecha='$detfecha', horasalida='$horasalida', kgutilizados='$kgutilizados', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && empty ($detfecha) && empty($detidlinea) && !empty ($horaentrada) && !empty ($horasalida) && !empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', horaentrada='$horaentrada', horasalida='$horasalida', kgutilizados='$kgutilizados' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && empty ($detfecha) && empty($detidlinea) && !empty ($horaentrada) && !empty ($horasalida) && empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', horaentrada='$horaentrada', horasalida='$horasalida', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && !empty ($horaentrada) && !empty ($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha', lineaenvasado='$detidlinea', horaentrada='$horaentrada', horasalida='$horasalida', "
                    . "kgutilizados='$kgutilizados', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && empty ($detfecha) && empty($detidlinea) && !empty ($horaentrada) && empty ($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', horaentrada='$horaentrada', kgutilizados='$kgutilizados', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && empty ($detfecha) && empty($detidlinea) && !empty ($horaentrada) && !empty ($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET horaentrada='$horaentrada', horasalida='$horasalida', kgutilizados='$kgutilizados', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && empty ($detfecha) && !empty($detidlinea) && !empty ($horaentrada) && !empty ($horasalida) && !empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET lineaenvasado='$detidlinea', horaentrada='$horaentrada', horasalida='$horasalida', kgutilizados='$kgutilizados' WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && empty ($detfecha) && !empty($detidlinea) && !empty ($horaentrada) && !empty ($horasalida) && empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET lineaenvasado='$detidlinea', horaentrada='$horaentrada', horasalida='$horasalida', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && empty ($detfecha) && !empty($detidlinea) && !empty ($horaentrada) && empty ($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET lineaenvasado='$detidlinea', horaentrada='$horaentrada', kgutilizados='$kgutilizados', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && empty ($detfecha) && !empty($detidlinea) && empty ($horaentrada) && !empty ($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET lineaenvasado='$detidlinea', horasalida='$horasalida', kgutilizados='$kgutilizados', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && !empty ($horaentrada) && empty ($horasalida) && !empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET fecha='$detfecha', lineaenvasado='$detidlinea', horaentrada='$horaentrada', kgutilizados='$kgutilizados' WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && empty ($horaentrada) && !empty ($horasalida) && !empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET fecha='$detfecha', lineaenvasado='$detidlinea', horasalida='$horasalida', kgutilizados='$kgutilizados' WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && !empty ($detfecha) && empty($detidlinea) && !empty ($horaentrada) && !empty ($horasalida) && !empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET fecha='$detfecha', horaentrada='$horaentrada', horasalida='$horasalida', kgutilizados='$kgutilizados' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && empty ($horaentrada) && empty ($horasalida) && empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha', lineaenvasado='$detidlinea' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && empty($detidlinea) && !empty ($horaentrada) && empty ($horasalida) && empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha', horaentrada='$horaentrada' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && empty ($detfecha) && !empty($detidlinea) && !empty ($horaentrada) && empty ($horasalida) && empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', lineaenvasado='$detidlinea', horaentrada='$horaentrada', WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && !empty ($horaentrada) && empty ($horasalida) && empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET fecha='$detfecha', lineaenvasado='$detidlinea', horaentrada='$horaentrada' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && empty($detidlinea) && empty ($horaentrada) && empty ($horasalida) && empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && empty ($detfecha) && !empty($detidlinea) && empty ($horaentrada) && empty ($horasalida) && empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', lineaenvasado='$detidlinea', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && empty ($horaentrada) && empty ($horasalida) && empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET fecha='$detfecha', lineaenvasado='$detidlinea', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && empty($detidlinea) && empty($horaentrada) && empty ($horasalida) && !empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha', kgutilizados='$kgutilizados' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && empty($detfecha) && empty($detidlinea) && empty($horaentrada) && empty($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', kgutilizados='$kgutilizados', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && !empty ($detfecha) && empty($detidlinea) && empty($horaentrada) && empty($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET fecha='$detfecha', kgutilizados='$kgutilizados', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && empty ($detfecha) && empty($detidlinea) && empty ($horaentrada) && !empty ($horasalida) && !empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', horasalida='$horasalida', kgutilizados='$kgutilizados' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && empty($detfecha) && empty($detidlinea) && empty ($horaentrada) && !empty ($horasalida) && empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', horasalida='$horasalida', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && empty ($detfecha) && empty($detidlinea) && empty ($horaentrada) && !empty ($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET horasalida='$horasalida', kgutilizados='$kgutilizados', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && empty ($detfecha) && empty($detidlinea) && !empty ($horaentrada) && !empty ($horasalida) && !empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET horaentrada='$horaentrada', horasalida='$horasalida', kgutilizados='$kgutilizados' WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && empty ($detfecha) && empty($detidlinea) && !empty ($horaentrada) && !empty ($horasalida) && empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET horaentrada='$horaentrada', horasalida='$horasalida', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && empty ($detfecha) && empty($detidlinea) && !empty ($horaentrada) && empty ($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET horaentrada='$horaentrada', kgutilizados='$kgutilizados', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && !empty ($detfecha) && empty($detidlinea) && empty ($horaentrada) && empty ($horasalida) && empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', fecha='$detfecha' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && empty ($detfecha) && !empty($detidlinea) && empty ($horaentrada) && empty ($horasalida) && empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', lineaenvasado='$detidlinea' WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && !empty ($detfecha) && !empty($detidlinea) && empty ($horaentrada) && empty ($horasalida) && empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET fecha='$detfecha', lineaenvasado='$detidlinea' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && empty ($detfecha) && empty($detidlinea) && empty ($horaentrada) && empty ($horasalida) && empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && !empty ($detfecha) && empty($detidlinea) && empty ($horaentrada) && empty ($horasalida) && empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET fecha='$detfecha', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && empty ($detfecha) && empty($detidlinea) && empty ($horaentrada) && empty ($horasalida) && !empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada', kgutilizados='$kgutilizados' WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && empty ($detfecha) && empty($detidlinea) && empty ($horaentrada) && empty ($horasalida) && !empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE kgutilizados='$kgutilizados', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && empty ($detfecha) && empty($detidlinea) && empty ($horaentrada) && !empty ($horasalida) && !empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET horasalida='$horasalida', kgutilizados='$kgutilizados' WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && empty ($detfecha) && empty($detidlinea) && empty ($horaentrada) && !empty ($horasalida) && empty($kgutilizados) && !empty ($detobs)){
            $consulta="UPDATE detallesalida SET horasalida='$horasalida', observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }else if(!empty ($detidloteentrada) && empty ($detfecha) && empty($detidlinea) && empty ($horaentrada) && empty ($horasalida) && empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET idloteentrada='$detidloteentrada' WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && !empty ($detfecha) && empty($detidlinea) && empty ($horaentrada) && empty ($horasalida) && empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET fecha='$detfecha' WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && empty ($detfecha) && !empty($detidlinea) && empty ($horaentrada) && empty ($horasalida) && empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET lineaenvasado='$detidlinea' WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && empty ($detfecha) && empty($detidlinea) && !empty ($horaentrada) && empty ($horasalida) && empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET horaentrada='$horaentrada'  WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && empty ($detfecha) && empty($detidlinea) && empty ($horaentrada) && !empty ($horasalida) && empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET horasalida='$horasalida' WHERE id='$iddetallesalida'"; 
        }else if(empty ($detidloteentrada) && empty ($detfecha) && empty($detidlinea) && empty ($horaentrada) && empty ($horasalida) && !empty($kgutilizados) && empty ($detobs)){
            $consulta="UPDATE detallesalida SET kgutilizados='$kgutilizados' WHERE id='$iddetallesalida'"; 
        }else{
            $consulta="UPDATE detallesalida SET observaciones='$detobs' WHERE id='$iddetallesalida'"; 
        }
        //guardamos el resultado de la consulta y volvemos a la pagina del formulario
            $resultado = $conexion -> query($consulta);
            header("Location:../../modelo/detallesalida/detprincipal.php");
    }//fin else
    
?>

