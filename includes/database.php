<?php
    // header("Cache-Control: no-cache, must-revalidate");
    header("Access-Control-Allow-Origin: *");
    $conexion = new PDO("sqlsrv:server=JOHAN-ELBER\SQLEXPRESS;database=SistemaHotel","sa","sa");
    // $conexion = mysqli_connect("localhost", "root", "root", "sistemahotel");
    // if(!$conexion){
    //     echo 'Error';
    // }
    // else{
    //     echo 'Conexion correcta!';
    // }

?>