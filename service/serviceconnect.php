<?php
session_start();
include "../model/fonctions.php";

  $email  = $_POST["emails"];
  $password= $_POST["passwords"];


  $user = verificationusername($email,$password);


 if(empty($user)) {
      header("location: ../index.php?page=login&connexion=error");
 } else {
  $_SESSION['user']=$user[0];
  header("location: ../index.php?page=profil&connexion=succes");
 }




print_r($resultat);
// if(!empty($result) && !empty($resultat)){
//  header("location: ../index.php?page=profil&connexion=succes");
// }
// else ;


?>
