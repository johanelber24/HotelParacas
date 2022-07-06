<?php

    require_once '../includes/database.php';

    $nombres = trim($_POST["nombres"]);
    $apellidos = trim($_POST["apellidos"]);
    $fechaNacimiento = trim($_POST["fechaNacimiento"]);
    $tipoDoc = trim($_POST["tipoDocumento"]);
    $numDoc = trim($_POST["numDocumento"]);
    $correo = trim($_POST["correo"]);
    $telefono = trim($_POST["telefono"]);
    $fechaIngreso = trim($_POST["fechaIngreso"]);
    $fechaSalida = trim($_POST["fechaSalida"]);
    $habitacion = trim($_POST["habitacion"]);

    $errores = [];

    if(!$nombres){
        $errores[] = "El campo es obligatorio";
    }

    if(!$apellidos){
        $errores[] = "El campo es obligatorio";
    }

    if(!$fechaNacimiento){
        $errores[] = "El campo es obligatorio";
    }

    if(!$tipoDoc){
        $errores[] = "El campo es obligatorio";
    }

    if(!$numDoc){
        $errores[] = "El campo es obligatorio";
    }

    if(!$correo){
        $errores[] = "El campo es obligatorio";
    }

    if(!$telefono){
        $errores[] = "El campo es obligatorio";
    }

    if(!$fechaIngreso){
        $errores[] = "El campo es obligatorio";
    }

    if(!$fechaSalida){
        $errores[] = "El campo es obligatorio";
    }

    if($fechaSalida < $fechaIngreso){
        $errores[] = "La fecha de salida tiene que ser mayor a la de ingreso";
    }

    if(!$habitacion){
        $errores[] = "El campo es obligatorio";
    }

    if(empty($errores)){

        $consulta = $conexion->prepare("INSERT INTO Tb_ReservaWeb (Nombres, Apellidos, FecNac, TipoDocumento, NumDocumento, Correo, Telefono, 
        FecEntrada, FecSalida, Habitacion, Estado) VALUES ('".$nombres."', '".$apellidos."', '".$fechaNacimiento."', '".$tipoDoc."', '".$numDoc."', 
        '".$correo."', '".$telefono."', '".$fechaIngreso."', '".$fechaSalida."', '".$habitacion."', 1)");

        $resultado = $consulta->execute();

        if($resultado == true){
            echo 'Registro de reserva correcto';
        }
        else{
            echo 'No se pudo registrar la reserva';
        }

    }else{
        foreach($errores as $error){
            echo '<pre>';
            echo $error;
            echo '</pre>';
        }
    }
?>