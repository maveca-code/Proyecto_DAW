<?php
    require_once '../../modelo/conectar.php'; //requiero el archivo que establece la conexion
    
    if(empty($idcomprador)){//si el id del comprador no esta definido o es nula nos indica que lo pongamos.
        echo "Indique el Id y los campos del comprador a modificar.";
        echo "<br><a href='../../modelo/Comprador/comprincipal.php'>Volver al formulario...</a>";
    }else{//Pongo todas las opciones de modificación de la tabla.
        //Actualizo todos los campos
        if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia',"
                    . " CodigoPostal = '$comcodigopostal', NIF = '$comnif', Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto observaciones    
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia',"
                    . " CodigoPostal = '$comcodigopostal', NIF = '$comnif', Pais = '$compais', Almacen = '$almacen' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto almacen
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia',"
                    . " CodigoPostal = '$comcodigopostal', NIF = '$comnif', Pais = '$compais', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto pais
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Apodo = '$comapodo', Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia',"
                    . " CodigoPostal = '$comcodigopostal', NIF = '$comnif', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto nif
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia',"
                    . " CodigoPostal = '$comcodigopostal', Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto Codigo Postal    
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia',"
                    . " NIF = '$comnif', Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto Provincia
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', CodigoPostal = '$comcodigopostal',"
                    . " NIF = '$comnif', Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto Localidad    
        }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal',"
                    . " NIF = '$comnif', Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto direccion    
        }else if(!empty($empresa) && empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Apodo = '$comapodo', Localidad = '$comlocalidad', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal',"
                    . " NIF = '$comnif', Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto empresa    
        }else if(empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal',"
                    . " NIF = '$comnif', Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto observaciones y almacen    
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && empty($almacen) && empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia',"
                    . " CodigoPostal = '$comcodigopostal', NIF = '$comnif', Pais = '$compais'  WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto observaciones y pais    
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && !empty($almacen) && empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia',"
                    . " CodigoPostal = '$comcodigopostal', NIF = '$comnif', Almacen = '$almacen'  WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto observaciones y nif    
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && !empty($almacen) && empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia',"
                    . " CodigoPostal = '$comcodigopostal', Pais = '$compais', Almacen = '$almacen'  WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto observaciones y Codigo Postal    
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia',"
                    . " NIF = '$comnif', Pais = '$compais', Almacen = '$almacen'  WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto observaciones y provincia    
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', CodigoPostal = '$comcodigopostal',"
                    . " NIF = '$comnif', Pais = '$compais', Almacen = '$almacen'  WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto observaciones y localidad    
        }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal',"
                    . " NIF = '$comnif', Pais = '$compais', Almacen = '$almacen'  WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto observaciones y direccion    
        }else if(!empty($empresa) && empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Localidad = '$comlocalidad', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal',"
                    . " NIF = '$comnif', Pais = '$compais', Almacen = '$almacen'  WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto observaciones y empresa    
        }else if(empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && empty($comobs)){
            $consulta = "UPDATE comprador SET Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal',"
                    . " NIF = '$comnif', Pais = '$compais', Almacen = '$almacen'  WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto almacen y pais    
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia',"
                    . " CodigoPostal = '$comcodigopostal', NIF = '$comnif', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto almacen y nif
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia',"
                    . " CodigoPostal = '$comcodigopostal', Pais = '$compais', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto almacen y codigo postal    
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia',"
                    . " NIF = '$comnif', Pais = '$compais', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto almacen y provincia    
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', CodigoPostal = '$comcodigopostal',"
                    . " NIF = '$comnif', Pais = '$compais', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto almacen y localidad
        }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal',"
                    . " NIF = '$comnif', Pais = '$compais', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto almacen y direccion    
        }else if(!empty($empresa) && empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Localidad = '$comlocalidad', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal',"
                    . " NIF = '$comnif', Pais = '$compais', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto almacen y empresa    
        }else if(empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal',"
                    . " NIF = '$comnif', Pais = '$compais', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto pais y NIF
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal', "
                    . "Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto pais y Codigo Postal
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia', NIF = '$comnif', "
                    . "Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto pais y provincia
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', CodigoPostal = '$comcodigopostal', NIF = '$comnif', "
                    . "Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto pais y localidad
        }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal', NIF = '$comnif', "
                    . "Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto pais y direccion    
        }else if(!empty($empresa) && empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Localidad = '$comlocalidad', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal', NIF = '$comnif', "
                    . "Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto pais y empresa    
        }else if(empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal', NIF = '$comnif', "
                    . "Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto NIF y codigo postal    
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia'"
                    . ", Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto NIF y provincia    
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', CodigoPostal = '$comcodigopostal'"
                    . ", Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto NIF y localidad    
        }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal'"
                    . ", Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto NIF y direccion     
        }else if(!empty($empresa) && empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comlocalidad', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal'"
                    . ", Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto NIF y empresa    
        }else if(empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Direccion = '$comdir', Direccion = '$comlocalidad', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal'"
                    . ", Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto codigo postal y provincia    
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', "
                    . "NIF = '$comnif', Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto codigo postal y localidad    
        }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Provincia = '$comprovincia', "
                    . "NIF = '$comnif', Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto codigo postal y direccion    
        }else if(!empty($empresa) && empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Localidad = '$comlocalidad', Provincia = '$comprovincia', "
                    . "NIF = '$comnif', Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto codigo postal y empresa    
        }else if(empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia', "
                    . "NIF = '$comnif', Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto provincia y localidad    
        }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', CodigoPostal = '$comcodigopostal', "
                    . "NIF = '$comnif', Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto provincia y direccion    
        }else if(!empty($empresa) && empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Localidad = '$comlocalidad', CodigoPostal = '$comcodigopostal', "
                    . "NIF = '$comnif', Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto provincia y empresa    
        }else if(empty($empresa) && !empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Direccion = '$comdir', Localidad = '$comlocalidad', CodigoPostal = '$comcodigopostal', "
                    . "NIF = '$comnif', Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto localidad y direccion    
        }else if(!empty($empresa) && empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal', NIF = '$comnif', "
                    . "Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto localidad y empresa    
        }else if(empty($empresa) && !empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Direccion = '$comdir', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal', NIF = '$comnif', "
                    . "Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto direccion y empresa     
        }else if(empty($empresa) && empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Localidad = '$comlocalidad', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal', "
                     . "NIF = '$comnif', Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto observaciones, almacen y pais    
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia',"
                    . " CodigoPostal = '$comcodigopostal', NIF = '$comnif' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto observaciones, almacen y NIF   
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && empty($almacen) && empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia',"
                    . " CodigoPostal = '$comcodigopostal', Pais = '$compais' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto observaciones, almacen y codigopostal    
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && empty($almacen) && empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia',"
                    . " NIF = '$comnif', Pais = '$compais' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto observaciones, almacen y provincia    
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && empty($almacen) && empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', CodigoPostal = '$comcodigopostal',"
                    . " NIF = '$comnif', Pais = '$compais' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto observaciones, almacen y localidad    
        }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && empty($almacen) && empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal',"
                    . " NIF = '$comnif', Pais = '$compais' WHERE Id = '$idcomprador'";
        //Actualiza todos los campos excepto observaciones, almacen y direccion    
        }else if(!empty($empresa) && empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && empty($almacen) && empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal',"
                    . " NIF = '$comnif', Pais = '$compais' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto observaciones, almacen y empresa    
        }else if(empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && empty($almacen) && empty($comobs)){
            $consulta = "UPDATE comprador SET Direccion = '$comdir', Direccion = '$comdir', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal',"
                    . " NIF = '$comnif', Pais = '$compais' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto almacen, pais y NIF    
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia',"
                    . " CodigoPostal = '$comcodigopostal', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto almacen, pais y codigo postal    
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia',"
                    . " NIF = '$comnif', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto almacen, pais y provincia    
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', CodigoPostal = '$comcodigopostal',"
                    . " NIF = '$comnif', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto almacen, pais y localidad    
        }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal',"
                    . " NIF = '$comnif', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto almacen, pais y direccion    
        }else if(!empty($empresa) && empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Localidad = '$comlocalidad', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal',"
                    . " NIF = '$comnif', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto almacen, pais y empresa    
        }else if(empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal',"
                    . " NIF = '$comnif', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualiza todos los campos excepto pais, nif y observaciones    
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && empty($compais) && !empty($almacen) && empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia',"
                    . " CodigoPostal = '$comcodigopostal', Almacen = '$almacen' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto pais, nif y codigo postal    
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia',"
                    . " Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto pais, nif y provincia    
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', CodigoPostal = '$comcodigopostal',"
                    . " Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto pais, nif y localidad    
        }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal',"
                    . " Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto pais, nif y direccion    
        }else if(!empty($empresa) && empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Localidad = '$comlocalidad', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal',"
                    . " Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto pais, nif, y empresa    
        }else if(empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal',"
                    . " Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto nif, codigo postal y observaciones    
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && !empty($almacen) && empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia', "
                    . "Pais = '$compais', Almacen = '$almacen' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto nif, codigo postal y almacen
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && empty($almacen) && !empty($comobs)){ 
             $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia', "
                    . "Pais = '$compais', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto nif, codigo postal y provincia     
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', Pais = '$compais', "
                    . "Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto nif, codigo postal y localidad     
        }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Provincia = '$comprovincia', Pais = '$compais', "
                    . "Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto nif, codigo postal y direccion    
        }else if(!empty($empresa) && empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Localidad = '$comlocalidad', Provincia = '$comprovincia', Pais = '$compais', "
                    . "Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto nif, codigo postal y empresa    
        }else if(empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia', Pais = '$compais', "
                    . "Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto codigo postal, provincia y observaciones    
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', NIF = '$comnif', "
                    . "Pais = '$compais', Almacen = '$almacen' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto codigo postal, provincia y almacen    
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', NIF = '$comnif', "
                    . "Pais = '$compais', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto codigo postal, provincia y pais
        }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && !empty($almacen) && !empty($comobs)){ 
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', NIF = '$comnif', "
                    . "Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto codigo postal, provincia y localidad    
        }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', NIF = '$comnif', Pais = '$compais', "
                    . "Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto codigo postal, provincia y direccion    
        }else if(!empty($empresa) && empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Localidad = '$comlocalidad', NIF = '$comnif', Pais = '$compais', "
                    . "Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto codigo postal, provincia y empresa    
        }else if(empty($empresa) && !empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Direccion = '$comdir', Localidad = '$comlocalidad', NIF = '$comnif', Pais = '$compais', "
                    . "Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto localidad, provincia y observaciones    
        }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa' Direccion = '$comdir', CodigoPostal = '$comcodigopostal', "
                    . "NIF = '$comnif', Pais = '$compais', Almacen = '$almacen' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto localidad, provincia y almacen    
        }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', CodigoPostal = '$comcodigopostal', "
                    . "NIF = '$comnif', Pais = '$compais', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
         //Actualizo todos los campos excepto localidad, provincia y pais
        }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', CodigoPostal = '$comcodigopostal', "
                    . "NIF = '$comnif', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto localidad, provincia y nif
        }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', CodigoPostal = '$comcodigopostal', "
                    . "Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto localidad, provincia y direccion    
        }else if(!empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', CodigoPostal = '$comcodigopostal', "
                    . "NIF = '$comnif', Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto localidad, provincia y empresa    
        }else if(empty($empresa) && !empty($comdir) && empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Direccion = '$comdir', CodigoPostal = '$comcodigopostal', "
                . "NIF = '$comnif', Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto direccion, localidad y observaciones    
        }else if(!empty($empresa) && empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal', "
                    . "NIF = '$comnif', Pais = '$compais', Almacen = '$almacen' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto direccion, localidad y almacen    
        }else if(!empty($empresa) && empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal', "
                    . "NIF = '$comnif', Pais = '$compais', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto direccion, localidad y pais
        }else if(!empty($empresa) && empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal', "
                    . "NIF = '$comnif', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";    
        //Actualizo todos los campos excepto direccion, localidad y nif    
        }else if(!empty($empresa) && empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal', "
                    . "Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto direccion, localidad y codigo postal    
        }else if(!empty($empresa) && empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Provincia = '$comprovincia', NIF = '$comnif', "
                    . "Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto direccion, localidad y empresa    
        }else if(empty($empresa) && empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal', NIF = '$comnif', "
                    . "Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto pais, almacen, observaciones y nif   
       }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia',"
                    . " CodigoPostal = '$comcodigopostal' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto pais, almacen, observaciones y codigo postal    
       }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia',"
                    . " NIF = '$comnif' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto pais, almacen, observaciones y provincia   
       }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', CodigoPostal = '$comcodigopostal',"
                    . " NIF = '$comnif' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto pais, almacen, observaciones y localidad   
       }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal',"
                    . " NIF = '$comnif' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto pais, almacen, observaciones y direccion   
       }else if(!empty($empresa) && empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Localidad = '$comlocalidad', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal',"
                    . " NIF = '$comnif' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto pais, almacen, observaciones y empresa   
       }else if(empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal',"
                    . " NIF = '$comnif' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto nif, pais, almacen y codigo postal   
       }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', "
                   . "Provincia = '$comprovincia', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto nif, pais, almacen y provincia   
       }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', "
                   . "CodigoPostal = '$comcodigopostal', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto nif, pais, almacen y localidad   
       }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Provincia = '$comprovincia', "
                   . "CodigoPostal = '$comcodigopostal', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto nif, pais, almacen y direccion   
       }else if(!empty($empresa) && empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Localidad = '$comlocalidad', Provincia = '$comprovincia', "
                   . "CodigoPostal = '$comcodigopostal', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto nif, pais, almacen y empresa   
       }else if(empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia', "
                   . "CodigoPostal = '$comcodigopostal', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto codigo postal, nif, pais y observaciones   
       }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && !empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', "
                   . "Provincia = '$comprovincia',Almacen = '$almacen' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto codigo postal, nif, pais y provincia   
       }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && !empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', "
                   . "Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto codigo postal, nif, pais y localidad   
       }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && !empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Provincia = '$comprovincia', "
                   . "Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto codigo postal, nif, pais y direccion   
       }else if(!empty($empresa) && empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && !empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Localidad = '$comlocalidad', Provincia = '$comprovincia', "
                   . "Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto codigo postal, nif, pais y empresa   
       }else if(empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && !empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia', "
                   . "Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto provincia, codigo postal, nif y observaciones   
       }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && !empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', "
                   . "Pais = '$compais', Almacen = '$almacen' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto provincia, codigo postal, nif y almacen   
       }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', "
                   . "Pais = '$compais', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto provincia, codigo postal, nif y localidad   
       }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Pais = '$compais', "
                   . "Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto provincia, codigo postal, nif y direccion   
       }else if(!empty($empresa) && empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comlocalidad', Pais = '$compais', "
                   . "Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto provincia, codigo postal, nif y empresa   
       }else if(empty($empresa) && !empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Direccion = '$comdir', Direccion = '$comlocalidad', Pais = '$compais', "
                   . "Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto localidad, provincia, codigo postal y observaciones   
       }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', NIF = '$comnif', Pais = '$compais', "
                   . "Almacen = '$almacen' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto localidad, provincia, codigo postal y almacen   
       }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', NIF = '$comnif', Pais = '$compais', "
                   . "Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto localidad, provinicia, codigo postal y pais   
       }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && !empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', NIF = '$comnif', Almacen = '$almacen', "
                   . "Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto localidad, provincia, codigo postal y direccion   
       }else if(!empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', NIF = '$comnif', Pais = '$compais', Almacen = '$almacen', "
                   . "Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto localidad, provincia, codigo postal y empresa  
       }else if(empty($empresa) && !empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Direccion = '$comdir', NIF = '$comnif', Pais = '$compais', Almacen = '$almacen', "
                   . "Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto direccion, localidad, provincia y observaciones
       }else if(!empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', CodigoPostal = '$comcodigopostal', NIF = '$comnif', Pais = '$compais', "
                   . "Almacen = '$almacen' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto direccion, localidad, provincia y almacen   
       }else if(!empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', CodigoPostal = '$comcodigopostal', NIF = '$comnif', Pais = '$compais', "
                   . "Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto direccion, localidad, provincia y pais   
       }else if(!empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && !empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', CodigoPostal = '$comcodigopostal', NIF = '$comnif', Almacen = '$almacen', "
                   . "Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto direccion, localidad, provincia y nif   
       }else if(!empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', CodigoPostal = '$comcodigopostal', Pais = '$compais', Almacen = '$almacen', "
                   . "Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto direccion, localidad, provincia y empresa   
       }else if(empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET CodigoPostal = '$comcodigopostal', NIF = '$comnif', Pais = '$compais', Almacen = '$almacen', "
                   . "Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto nif, pais, almacen, observaciones y codigo postal   
       }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', "
                   . "Provincia = '$comprovincia' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto nif, pais, almacen, observaciones y provincia   
       }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad', "
                   . "codigoPostal = '$comcodigopostal' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto nif, pais, almacen, observaciones y localidad   
        }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Provincia = '$comprovincia', "
                . "codigoPostal = '$comcodigopostal' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto nif, pais, almacen, observaciones y direccion   
       }else if(!empty($empresa) && empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Localidad = '$comlocalidad', Provincia = '$comprovincia', "
                . "codigoPostal = '$comcodigopostal' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto nif, pais, almacen, observaciones y empresa   
       }else if(empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia', "
                . "codigoPostal = '$comcodigopostal' WHERE Id = '$idcomprador'";
       //Actualizo todos los campos excepto codigo postal, nif, pais, almacen y provincia    
       }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad',"
                    . " Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto codigo postal, nif, pais, almacen y localidad   
       }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Provinicia = '$comprovincia',"
                    . " Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto codigo postal, nif, pais, almacen y direccion   
       }else if(!empty($empresa) && empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Localidad = '$comlocalidad', Provinicia = '$comprovincia',"
                    . " Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto codigo postal, nif, pais, almacen y empresa   
       }else if(empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Direccion = '$comdir', Localidad = '$comlocalidad', Provinicia = '$comprovincia',"
                    . " Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto provincia, codigo postal, nif, pais y observaciones   
       }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && !empty($almacen) && empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad',"
                    . " Almacen = '$almacen' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto provincia, codigo postal, nif, pais y localidad    
       }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && !empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Almacen = '$almacen', "
                   . "Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto provincia, codigo postal, nif, pais y direccion   
       }else if(!empty($empresa) && empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && !empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Localidad = '$comlocalidad', Almacen = '$almacen', "
                   . "Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto provincia, codigo postal, nif, pais y empresa   
       }else if(empty($empresa) && !empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && !empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Direccion = '$comdir', Localidad = '$comlocalidad', Almacen = '$almacen', "
                   . "Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto localidad, provincia, codigo postal, nif y observaciones   
       }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && !empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Pais = '$compais', Almacen = '$almacen' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto localidad, provincia, codigo postal, nif y almacen   
       }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Pais = '$compais', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto localidad, provincia, codigo postal, nif y direccion   
       }else if(!empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto localidad, provincia, codigo postal, nif y empresa   
       }else if(empty($empresa) && !empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Direccion = '$comdir', Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto direccion, localidad, provincia, codigo postal y observaciones   
       }else if(!empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', NIF = '$comnif', Pais = '$compais', Almacen = '$almacen' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto direccion, localidad, provincia, codigo postal y almacen   
       }else if(!empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', NIF = '$comnif', Pais = '$compais', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto direccion, localidad, provincia, codigo postal y pais   
       }else if(!empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && !empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', NIF = '$comnif', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto direccion, localidad, provincia, codigo postal y empresa    
       }else if(empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET NIF = '$comnif', Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto codigo postal, nif, pais, almacen, observaciones y provincia
       }else if(!empty($empresa) && !empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
            $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Localidad = '$comlocalidad' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto codigo postal, nif, pais, almacen, observaciones y localidad    
       }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Provincia = '$comprovincia' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto codigo postal, nif, pais, almacen, observaciones y direccion   
       }else if(!empty($empresa) && empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Localidad = '$comlocalidad', Provincia = '$comprovincia' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto codigo postal, nif, pais, almacen, observaciones y empresa
       }else if(empty($empresa) && !empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Direccion = '$comdir', Localidad = '$comlocalidad', Provincia = '$comprovincia' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto provincia, codigo postal, nif, pais, almacen y localidad
       }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto provincia, codigo postal, nif, pais, almacen y direccion
       }else if(!empty($empresa) && empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Localidad = '$comlocalidad', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto provincia, codigo postal, nif, pais, almacen y empresa
       }else if(empty($empresa) && !empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Direccion = '$comdir', Localidad = '$comlocalidad', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto localidad, provincia, codigo postal, nif, pais y observaciones
       }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && !empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir', Almacen = '$almacen' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto localidad, provincia, codigo postal, nif, pais y direccion 
       }else if(!empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && !empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Almacen = '$almacen', Observaciones = '$comobs', WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto localidad, provincia, codigo postal, nif, pais y empresa  
       }else if(empty($empresa) && !empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && !empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Direccion = '$comdir', Almacen = '$almacen', Observaciones = '$comobs', WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto direccion, localidad, provincia, codigo postal, nif y observaciones   
       }else if(!empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && !empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Pais = '$compais', Almacen = '$almacen' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto direccion, localidad, provincia, codigo postal, nif y almacen    
       }else if(!empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Pais = '$compais', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto direccion, localidad, provincia, codigo postal, nif y empresa   
       }else if(empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && !empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Pais = '$compais', Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto provincia, codigo postal, nif, pais, almacen, observaciones y localidad
       }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto provincia, codigo postal, nif, pais, almacen, observaciones y direccion
       }else if(!empty($empresa) && empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Localidad = '$comlocalidad' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto provincia, codigo postal, nif, pais, almacen, observaciones y empresa
       }else if(empty($empresa) && !empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Direccion = '$comdir', Localidad = '$comlocalidad', WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto localidad, provincia, codigo postal, nif, pais, almacen y direccion 
       }else if(!empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto localidad, provincia, codigo postal, nif, pais, almacen y empresa 
       }else if(empty($empresa) && !empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Direccion = '$comdir', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto direccion, localidad, provincia, codigo postal, nif, pais y observaciones
       }else if(!empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && !empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Almacen = '$almacen' WHERE Id = '$idcomprador'";
        //Actualizo todos los campos excepto direccion, localidad, provincia, codigo postal, nif, pais y empresa
       }else if(empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && !empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo solo empresa y direccion
       }else if(!empty($empresa) && !empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Empresa = '$empresa', Direccion = '$comdir' WHERE Id = '$idcomprador'";
        //Actualizo solo empresa y localidad  
       }else if(!empty($empresa) && empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
                $consulta = "UPDATE comprador SET Empresa = '$empresa', Localidad = '$comlocalidad' WHERE Id = '$idcomprador'";
        //Actualizo solo empresa y provincia        
       }else if(!empty($empresa) && empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
                $consulta = "UPDATE comprador SET Empresa = '$empresa', Provincia = '$comprovincia' WHERE Id = '$idcomprador'";
        //Actualizo solo empresa y codigo postal        
       }else if(!empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
                $consulta = "UPDATE comprador SET Empresa = '$empresa', CodigoPostal = '$comcodigopostal' WHERE Id = '$idcomprador'";
        //Actualizo solo empresa y nif        
       }else if(!empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
                $consulta = "UPDATE comprador SET Empresa = '$empresa', NIF = '$comnif' WHERE Id = '$idcomprador'";
        //Actualizo solo empresa y pais        
       }else if(!empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && empty($almacen) && empty($comobs)){
                $consulta = "UPDATE comprador SET Empresa = '$empresa', Pais = '$compais' WHERE Id = '$idcomprador'";
        //Actualizo solo empresa y almacen        
       }else if(!empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && !empty($almacen) && empty($comobs)){
                $consulta = "UPDATE comprador SET Empresa = '$empresa', Almacen = '$almacen' WHERE Id = '$idcomprador'";
        //Actualizo solo empresa y observaciones        
       }else if(!empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && !empty($almacen) && empty($comobs)){
                $consulta = "UPDATE comprador SET Empresa = '$empresa', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo solo apodo y direccion
       }else if(empty($empresa) && !empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Apodo = '$comapodo', Direccion = '$comdir' WHERE Id = '$idcomprador'";
        //Actualizo solo direccion y localidad
       }else if(empty($empresa) && !empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Direccion = '$comdir', Localidad = '$comlocalidad' WHERE Id = '$idcomprador'";
        //Actualizo solo direccion y provincia
       }else if(empty($empresa) && !empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Direccion = '$comdir', Provincia = '$comprovincia' WHERE Id = '$idcomprador'";
        //Actualizo solo direccion y codigo postal
       }else if(empty($empresa) && !empty($comdir) && empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Direccion = '$comdir', CodigoPostal = '$comcodigopostal' WHERE Id = '$idcomprador'";
        //Actualizo solo direccion y nif
       }else if(empty($empresa) && !empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Direccion = '$comdir', NIF = '$comnif' WHERE Id = '$idcomprador'";
        //Actualizo solo direccion y pais
       }else if(empty($empresa) && !empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Direccion = '$comdir', Pais = '$compais' WHERE Id = '$idcomprador'";
        //Actualizo solo direccion y almacen
       }else if(empty($empresa) && !empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && !empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Direccion = '$comdir', Almacen = '$almacen' WHERE Id = '$idcomprador'";
        //Actualizo solo direccion y observaciones
       }else if(empty($empresa) && !empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Direccion = '$comdir', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo solo localidad y provincia
       }else if(empty($empresa) && empty($comdir) && !empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Localidad = '$comlocalidad', Provincia = '$comprovincia' WHERE Id = '$idcomprador'";
        //Actualizo solo localidad y codigo postal
       }else if(empty($empresa) && empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Localidad = '$comlocalidad', CodigoPostal = '$comcodigopostal' WHERE Id = '$idcomprador'";
        //Actualizo solo localidad y nif
       }else if(empty($empresa) && empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Localidad = '$comlocalidad', NIF = '$comnif' WHERE Id = '$idcomprador'";
        //Actualizo solo localidad y pais
       }else if(empty($empresa) && empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Localidad = '$comlocalidad', Pais = '$compais' WHERE Id = '$idcomprador'";
        //Actualizo solo localidad y almacen
       }else if(empty($empresa) && empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && !empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Localidad = '$comlocalidad', Almacen = '$almacen' WHERE Id = '$idcomprador'";
        //Actualizo solo localidad y observaciones
       }else if(empty($empresa) && empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Localidad = '$comlocalidad', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo solo provincia y codigo postal
       }else if(empty($empresa) && empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Provincia = '$comprovincia', CodigoPostal = '$comcodigopostal' WHERE Id = '$idcomprador'";
        //Actualizo solo provincia y nif
       }else if(empty($empresa) && empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Provincia = '$comprovincia', NIF = '$comnif' WHERE Id = '$idcomprador'";
        //Actualizo solo provincia y pais
       }else if(empty($empresa) && empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Provincia = '$comprovincia', Pais = '$compais' WHERE Id = '$idcomprador'";
        //Actualizo solo provincia y almacen
       }else if(empty($empresa) && empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && !empty($almacen) && empty($comobs)){
           $consulta = "UPDATE comprador SET Provincia = '$comprovincia', Almacen = '$almacen' WHERE Id = '$idcomprador'";
        //Actualizo solo provincia y observaciones
       }else if(empty($empresa) && empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && !empty($comobs)){
           $consulta = "UPDATE comprador SET Provincia = '$comprovincia', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo solo codigo postal y nif
       }else if(empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
                $consulta = "UPDATE comprador SET CodigoPostal = '$comcodigopostal', NIF = '$comnif' WHERE Id = '$idcomprador'";
        //Actualizo solo codigo postal y pais        
       }else if(empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && empty($almacen) && empty($comobs)){
                $consulta = "UPDATE comprador SET CodigoPostal = '$comcodigopostal', Pais = '$compais' WHERE Id = '$idcomprador'";
        //Actualizo solo codigo postal y almacen        
       }else if(empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && empty($compais) && !empty($almacen) && empty($comobs)){
                $consulta = "UPDATE comprador SET CodigoPostal = '$comcodigopostal', Almacen = '$almacen' WHERE Id = '$idcomprador'";
        //Actualizo solo codigo postal y observaciones       
       }else if(empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && !empty($comobs)){
                $consulta = "UPDATE comprador SET CodigoPostal = '$comcodigopostal', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo solo nif y pais      
       }else if(empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && !empty($compais) && empty($almacen) && empty($comobs)){
                $consulta = "UPDATE comprador SET NIF = '$comnif', Pais = '$compais' WHERE Id = '$idcomprador'";
        //Actualizo solo nif y almacen      
       }else if(empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && !empty($almacen) && empty($comobs)){
                $consulta = "UPDATE comprador SET NIF = '$comnif', Almacen = '$almacen' WHERE Id = '$idcomprador'";
        //Actualizo solo nif y observaciones      
       }else if(empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && empty($almacen) && !empty($comobs)){
                $consulta = "UPDATE comprador SET NIF = '$comnif', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo solo pais y almacen      
       }else if(empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && !empty($almacen) && empty($comobs)){
                $consulta = "UPDATE comprador SET Pais = '$compais', Almacen = '$almacen' WHERE Id = '$idcomprador'";
        //Actualizo solo pais y observaciones      
       }else if(empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && empty($almacen) && !empty($comobs)){
                $consulta = "UPDATE comprador SET Pais = '$compais', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo solo almacen y observaciones      
       }else if(empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && !empty($almacen) && !empty($comobs)){
                $consulta = "UPDATE comprador SET Almacen = '$almacen', Observaciones = '$comobs' WHERE Id = '$idcomprador'";
        //Actualizo solo empresa     
       }else if(!empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
                $consulta = "UPDATE comprador SET Empresa = '$empresa' WHERE Id = '$idcomprador'";
        //Actualizo solo direccion    
       }else if(empty($empresa) && !empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
                $consulta = "UPDATE comprador SET Direccion = '$comdir' WHERE Id = '$idcomprador'";
        //Actualizo solo localidad   
       }else if(empty($empresa) && empty($comdir) && !empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
                $consulta = "UPDATE comprador SET Localidad = '$comlocalidad' WHERE Id = '$idcomprador'";
        //Actualizo solo provincia  
       }else if(empty($empresa) && empty($comdir) && empty($comlocalidad) && !empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
                $consulta = "UPDATE comprador SET Provincia = '$comprovincia' WHERE Id = '$idcomprador'";
        //Actualizo solo Codigo postal  
       }else if(empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && !empty($comcodigopostal) && empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
                $consulta = "UPDATE comprador SET CodigoPostal = '$comcodigopostal' WHERE Id = '$idcomprador'";
        //Actualizo solo nif  
       }else if(empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && !empty($comnif)
                && empty($compais) && empty($almacen) && empty($comobs)){
                $consulta = "UPDATE comprador SET NIF = '$comnif' WHERE Id = '$idcomprador'";
        //Actualizo solo pais  
       }else if(empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && !empty($compais) && empty($almacen) && empty($comobs)){
                $consulta = "UPDATE comprador SET Pais = '$compais' WHERE Id = '$idcomprador'";
        //Actualizo solo almacen  
       }else if(empty($empresa) && empty($comdir) && empty($comlocalidad) && empty($comprovincia) && empty($comcodigopostal) && empty($comnif)
                && empty($compais) && !empty($almacen) && empty($comobs)){
                $consulta = "UPDATE comprador SET Almacen = '$almacen' WHERE Id = '$idcomprador'";
        //Actualizo solo observaciones  
       }else{
            $consulta = "UPDATE comprador SET Observaciones = '$comobs' WHERE Id = '$idcomprador'";
       }
    }//fin else
        
        //guardamos el resultado de la consulta y volvemos a la pagina del formulario
        $resultado = $conexion -> query($consulta);
        header("Location:../../modelo/comprador/comprincipal.php");   
?>
