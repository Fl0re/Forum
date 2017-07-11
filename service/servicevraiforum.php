<?php

include "../model/fonctions.php";
  $question= $_POST["question"];
  $textes = $_POST["textes"];
 
 session_start();
header('Content-Type: text/html; charset=UTF8');


$username =$_SESSION['questions'];

$result= insertforum($question, $textes, $username );


if($result==1){
    header("location: ../index.php?page=profil&enregistrement=succes");
}

?>