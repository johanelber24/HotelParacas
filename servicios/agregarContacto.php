<?php

    require_once '../includes/database.php';

    $nombresContacto = trim($_POST["nombresContacto"]);
    $correoContacto = trim($_POST["correoContacto"]);
    $telefonoContacto = trim($_POST["telefonoContacto"]);
    $mensajeContacto = trim($_POST["mensajeContacto"]);
    $fecha = date("05/m/Y");

    $errores = [];

    if(!$nombresContacto){
        $errores[] = "El campo es obligatorio";
    }

    if(!$correoContacto){
        $errores[] = "El campo es obligatorio";
    }

    if(!$telefonoContacto){
        $errores[] = "El campo es obligatorio";
    }

    if(!$mensajeContacto){
        $errores[] = "El campo es obligatorio";
    }



    if(empty($errores)){
        $consulta = $conexion->prepare("INSERT INTO Tb_Contacto (Nombres, Correo, Telefono, Mensaje, Fecha, Estado)
        VALUES ('".$nombresContacto."', '".$correoContacto."', '".$telefonoContacto."', '".$mensajeContacto."', '".$fecha."', 1)");
        
        // $resultado = mysqli_query($conexion, $consulta);
        $resultado = $consulta->execute();
        // if($resultado == true){
        //     // header('Location: contacto.php');
        //     echo 'Registro Correcto!';
        // }
        // else{
        //     echo 'Registro Incorrecto!';
        // }
    }
    // else{
    //     foreach($errores as $error){
    //         echo '<pre>';
    //         echo $error;
    //         echo '</pre>';
    //     }
    // }

?>