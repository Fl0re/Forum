<?php

include "../model/fonctions.php";

  $email = $_POST["emails"];
  $uPassword= $_POST["passwords"];


if(isset($_POST['submit'])){
$email = $_POST['email'];
$password = $_POST['password'];
}

if($email&&$uPassword){
$connect=mysql_connect('localhost','root','');
mysql_select_db('phplogin');
$query=mysql_query("SELECT*FROM user WHERE email='$email'&& password='$uPassword'");
$rows=mysql_num_rows($query);
if ($rows==1){
 header("location: ../index.php?page=profil&connexion=succes");
}
else echo"pseudo ou mot de passe non valid";
}

else echo"veuillez saisir tout les champs";

