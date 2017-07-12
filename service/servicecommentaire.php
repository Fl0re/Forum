<?php

include "../model/fonctions.php";
  $commentaire= $_POST["commentaire"];
  
 
 session_start();
header('Content-Type: text/html; charset=UTF8');


$username =$_SESSION['user'];

$result= commentaire($commentaire, $username );


if($result==1){
    header("location: ../index.php?page=profil&commentaire=succes&");
}

?>