<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $user = $_POST["user"];
        $password = $_POST["password"];
        $edad = $_POST["edad"];

        if(!is_numeric($edad) || $edad < 18) {
            echo "Solo puedes ingresar si eres mayor de 18 años.";
            exit;
        }
        if($user !== "Luis" || $password !== "Mendoza") {
            echo "USUARIO/CONTRASEÑA es incorrecto";
            exit;
        }
                echo "Todo ha salido muy bien:) ". $user;
    } else {
        echo "DATOS INCORRECTOS";
    }
?>