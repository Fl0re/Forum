<?php

include "../model/fonctions.php";
   $username= $_POST["username"];
  $email = $_POST["email"];
  $password= $_POST["password"];
 $cpassword=$_POST["cpassword"];

$result= inscription($username, $email, $password);


if($result==1){
    header("location: ../index.php?page=login&inscription=succes");
}

if($email==0 || $password ==0 || $username ==0){
    nettoyer();
}

extract ($_POST);

if(!empty($password) && !empty($username) && !empty($email)){
    if($password==$cpassword){
        echo "Tout est ok";
    }
     
}
else echo "Vous n'avez pas remplis tout les champs obligatoires";
    
 
 
?>