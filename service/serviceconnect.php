<?php
session_start();
include "../model/fonctions.php";

  $email  = $_POST["emails"];
  $password= $_POST["passwords"];


  $username = verificationusername($email);
$_SESSION['questions']=$username[0]["username"];

$result= verification($email);
$resultat = verification2($email);


 if(empty($result)) {
 header("location: ../index.php?page=login&connexion=error");
 } 

if($resultat[0][uPassword] == $password){
  header("location: ../index.php?page=profil&connexion=succes");
}
else header("location: ../index.php?page=login&connexion=error");

print_r($resultat);
// if(!empty($result) && !empty($resultat)){
//  header("location: ../index.php?page=profil&connexion=succes");
// }
// else ;


?>
