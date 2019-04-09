<?php
include ("constantes.php");
include ("Reservation.php");


echo "<pre>";
var_dump($_POST);
echo "</pre>";

$oReservation= new Reservation($_POST["nombre"],$_POST["email"],
        $_POST["sourceregion"],$_POST["ingles"],$_POST["datecheckin"],
        $_POST["datecheckout"]);

//echo "<pre>";
//var_dump($oReservation);
//echo "</pre>";

 if (isset($_SESSION["aReservation"])){
     $arrReservations=$_SESSION["aReservation"]; 
 } 
 
 $arrReservations[]=$oReservation;
 $_SESSION["aReservation"]=$arrReservations;

echo "<pre>";
var_dump( $_SESSION["aReservation"]);
echo "</pre>";