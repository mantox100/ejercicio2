<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include('Reservation.php');
include('constantes.php');
$ideliminar=$_POST["eliminanombre"];

//echo "<pre>";
//var_dump($ideliminar);
//echo "</pre>";

 foreach ($_SESSION["aReservation"] as $key => $oReservation) {
                if ($oReservation->getName()==$ideliminar){
                    unset($_SESSION["aReservation"][$key]);
                    $_SESSION["aReservation"]=$oReservation;
                }
            }

// foreach ($_SESSION["aVacaciones"] as $key => $oVacacion) {
//                if ($oVacacion->getRut()==$ideliminar){
//                    unset($_SESSION["aVacaciones"][$key]);
//                    $_SESSION["aVacaciones"]=$oVacacion;
//                }
//            }
//           