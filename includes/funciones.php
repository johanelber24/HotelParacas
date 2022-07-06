<?php

require 'app.php';

function incluirTemplate( $nombre ) {
    include TEMPLATES_URL . "/${nombre}.php";
}

function fechaMinima(){
    $fechaMinima = date("Y-m-d");
    // echo $fechaMinima;
    return $fechaMinima;
}

function fechaMaxima(){
    $d = date("d");
    $m = date("m");
    $y = date("Y");

    // echo '<pre>';
    // echo $d;
    // echo '</pre>';
    // echo '<pre>';
    // echo $m;
    // echo '</pre>';
    // echo '<pre>';
    // echo $y;
    // echo '</pre>';

    //Asigno el valor de las fechas a una variables para luego poder cambiarlas
    //Agrego 0 para reinicar la suma de dias, meses y años...
    $maxd = $d + 0;
    $maxm = $m + 0;
    $maxy = $y + 0;

    // echo '<pre>';
    // echo $maxd;
    // echo '</pre>';
    // echo '<pre>';
    // echo $maxm;
    // echo '</pre>';
    // echo '<pre>';
    // echo $maxy;
    // echo '</pre>';
    
    //Dia 29
    if($d == 29){
        //Si es 29 en un mes que tiene 30 dias
        if($m == "04" || $m == "06" || $m == "09" || $m == "11"){
            $maxd = 1;
            $maxm = $maxm + 1;
            $maxy = $maxy;
        } 

        //Si es 29 en un mes que tiene 31 dias
        if($m == "01" || $m == "03" || $m == "05" || $m == "07" || $m == "08" || $m == "10" || $m == "12"){
            $maxd = $maxd + 2;
            $maxm = $maxm;
            $maxy = $maxy;
        }
    }

    //Dia 30 
    if($d == 30){
        //Si es 30 en un mes que tiene 31 dias
        if($m == "01" || $m == "03" || $m == "05" || $m == "07" || $m == "08" || $m == "10"){
            $maxd = 1;
            $maxm = $maxm + 1;
            $maxy = $maxy;
        }

        //Si es 30 en un mes que tiene 30 dias
        if($m == "04" || $m == "06" || $m == "09" || $m == "11"){
            $maxd = 2;
            $maxm = $maxm + 1;
            $maxy = $maxy;
        }

        //Si es 30 en el mes de diciembre
        if($m == "12"){
            $maxd = 1;
            $maxm = 1;
            $maxy = $maxy + 1;
        }
    }
    else if($d >= 1 && $d <=31 && $d != 29 && $d != 30){
        //Si es cualquier otro dia que no sea 29 ni 30 en un mes que tiene 31 dias
        if($m == "01" || $m == "03" || $m == "05" || $m == "07" || $m == "08" || $m == "10"){
            //Si es 31
            if($d == 31){
                $maxd = 2;
                $maxm = $maxm + 1;
                $maxy = $maxy;
            }else{
                $maxd = $maxd + 2;
                $maxm = $maxm;
                $maxy = $maxy;
            }
        }
        
        //Si es cualquier otro dia que no sea 29 ni 30 en un mes que tiene 30 dias
        if($m == "04" || $m == "06" || $m == "09" || $m == "11"){
            $maxd = $maxd + 2;
            $maxm = $maxm;
            $maxy = $maxy;
        }

        //Si es cualquier dia en el mes de diciembre
        if($m == "12"){
            if($d == 31){
                $maxd = 2;
                $maxm = 1;
                $maxy = $maxy + 1;
            }
            else{
                $maxd = $maxd + 2;
                $maxm = $maxm;
                $maxy = $maxy;
            }
        }
    }

    //Si es en un mes que tiene 28 o 29 dias
    if($d == 28 || $d == 29){
        if($m == "02"){
            $maxd = 2;
            $maxm = $maxm + 1;
            $maxy = $maxy;
        }
    }    
    else if($d == 27){
        if($m == "02"){
            $maxd = 1;
            $maxm = $maxm + 1;
            $maxy = $maxy;
        }
    }
    else if($d != 27 || $d != 28 || $d != 29){
        if($m == "02"){
            $maxd = $maxd + 2;
            $maxm = $maxm;
            $maxy = $maxy;
        }
    }


    //Si el dia es menor a 10
    if($maxd < 10){
        $maxd = "0$maxd";
        // echo '<pre>';
        // echo $maxd;
        // echo '</pre>';
    }
    else{
        $maxd = $maxd;
        // echo '<pre>';
        // echo $maxd;
        // echo '</pre>';
    }
    // //Si el mes es menor a 10
    if($maxm < 10){
        $maxm = "0$maxm";
        // echo '<pre>';
        // echo $maxm;
        // echo '</pre>';
    }
    else{
        $maxm = $maxm;
        // echo '<pre>';
        // echo $maxm;
        // echo '</pre>';
    }

    $fechaMaxima = "$maxy-$maxm-$maxd";
    // echo $fechaMaxima;

    return $fechaMaxima;
}

?>