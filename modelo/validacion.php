<?php
    session_start(); //creo la sesion
    require_once 'conectar.php'; //requiero el archivo que establece la conexion
    
    //cojo los valores del formulario
    $user=$_POST['usuario'];
    $pass=$_POST['pass'];
    
    //realizo una consulta para saber si el usuario esta en la base de datos
    $consulta="SELECT Usuario, Password, Nivel FROM usuarios WHERE Usuario= '$user' AND Password = '$pass'";
    $resultado = $conexion -> query($consulta);
    $valor = $resultado -> fetch_row();
    
    //si nombre y contraseña no estan vacios y coinciden con los resultados de la consulta entrar como usuario
    if(isset($user)==$valor && isset($pass)==$valor){
        $_SESSION['usuario']=$user;
        $nivel=$valor[2];//en la variable nivel cogemos el ultimo valor del array que nos da fetch_row
        $_SESSION['nivel']=$nivel;
        header("Location:../vista/indice.php");
    }
    else{
        echo 'El usuario o la contraseña no coinciden o estan vacios.';
    }
?>

