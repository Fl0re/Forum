<?php

function getPage(){
  if(isset($_GET['page'])){
    $page = $_GET['page'];
  }else{
    $page = "login";
  }
  return $page;
}

function getFeedback(){
  $control = false;
  if(isset($_GET['controle'])){
    $control = $_GET['controle'];
  }
  return $control;
}

function getUser(){
    // Des appels en base de données
    // Dans notre exemple nous créons les données
    // manuellement
    $user = ["user","email"];
  return $user;
}

function getDescription(){
  // Des appels en base de données
  return "programming coach";
}

function getNombreUtilisateurs(){
  return 255;
}

function getconnexion(){
    $connexion = new PDO('mysql:host=localhost;dbname=forum;charset=UTF8','root','root');
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $connexion;
}
function inscription($username, $email, $password){
    $connexion = getconnection();
    $pdo = $connexion->prepare('INSERT INTO user SET username=:username, email=:email, uPassword=:uPassword ');

    $pdo->execute(array(
      'username'=>$username,
      'email' => $email,
      'uPassword'=>$password
    ));

    $result = $pdo->rowCount();
    return $result;
}
 ?>
