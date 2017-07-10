<?php

include "../model/fonctions.php";
   $username= $_POST["username"];
  $email = $_POST["email"];
  $uPassword= $_POST["password"];


$result= inscription($username, $email, $password);


if($result==1){
    header("location: ../index.php?page=login&inscription=succes");
}


if($username && $password && $email){

}
else echo"veuillez renseigner tout les champs";

?>