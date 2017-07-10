<?php

include "../model/fonctions.php";
  $sujet= $_POST["sujet"];
  $description = $_POST["description"];
 


$result= affichage($sujet, $description );


if($result==1){
    header("location: ../index.php?page=profil&enregistrement=succes");
}

?>