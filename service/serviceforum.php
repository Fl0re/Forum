<?php

include "../model/fonctions.php";
  $sujet= $_POST["sujet"];
  $description = $_POST["description"];
 
 session_start();
header('Content-Type: text/html; charset=UTF8');


$username =$_SESSION['user'];

$result= affichage($sujet, $description, $username );


if($result==1){
    header("location: ../index.php?page=discut&messages=succes&#valide");
}

?>