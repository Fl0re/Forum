<?php
include "../model/fonctions.php";

$question=$_POST["question"];
 
// var_dump($_POST);

$result=modifier($question);



if($result==1){
    header("location: ../index.php?page=profil&modification=succes");
}


?>