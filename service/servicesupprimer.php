
<?php
include "../model/fonctions.php";

$textesid=$_POST["id"];
 
// var_dump($_POST);

$result=supprimer($textesid);



if($result==1){
    header("location: ../index.php?page=profil&suppression=succes");
}


?>