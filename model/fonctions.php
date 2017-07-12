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
    $connexion = getconnexion();
    $pdo = $connexion->prepare('INSERT INTO user SET username=:username, email=:email, uPassword=:password ');

    $pdo->execute(array(
      'username'=>$username,
      'email' => $email,
      'password'=>$password
    ));

    $result = $pdo->rowCount();
    return $result;
}
function verification($email){
  $connexion = getconnexion();


  $pdo = $connexion->prepare('SELECT username FROM user WHERE  email=:email');
  $pdo->execute(
    array(
      'email'=>$email,
     
    ));
  $user = $pdo->fetchAll(PDO::FETCH_ASSOC);

  return $user;

}
function verification2($email){
  $connexion = getconnexion();


  $pdo = $connexion->prepare('SELECT uPassword FROM user WHERE  email=:email');
  $pdo->execute(
    array(
      'email'=>$email,
     
    ));
  $user = $pdo->fetchAll(PDO::FETCH_ASSOC);

  return $user;

}

function verificationusername($email,$password){
  $connexion = getconnexion();

  $pdo = $connexion->prepare('SELECT username,email FROM user WHERE  email=:email AND uPassword=:password');
  $pdo->execute(
    array(
      'email'=>$email,
      'password'=>$password,
     
    ));
  $user = $pdo->fetchAll(PDO::FETCH_ASSOC);

  return $user;

}

function checkinlogin($email){
  $connexion = getconnexion();


  $pdo = $connexion->prepare('SELECT username FROM user WHERE  email=:email');
  $pdo->execute(
    array(
      'email'=>$email,
     
    ));
  $user = $pdo->fetchAll(PDO::FETCH_ASSOC);

  return $user;

}

function affichage($sujet, $description, $username){
    $connexion = getconnexion();
    $pdo = $connexion->prepare('INSERT INTO questions SET description=:description, sujet=:sujet, username=:username, datecreate=NOW()');

    $pdo->execute(array(
      'description'=>$description,
      'sujet' => $sujet,
      'username' => $username
      
    ));

    $result = $pdo->rowCount();
    return $result;
}

function getquestions(){
  $connexion = getconnexion();
$object = $connexion->prepare('SELECT * FROM questions');
 $object->execute(array());
$questions = $object->fetchAll(PDO::FETCH_ASSOC);
return $questions;
 }

function insertforum($textes, $question, $username){
    $connexion = getconnexion();
    $pdo = $connexion->prepare('INSERT INTO forums SET question=:question, textes=:textes, username=:username, datecreate=NOW()');

    $pdo->execute(array(
      'question'=>$question,
      'textes' => $textes,
      'username' => $username
      
    ));

    $result = $pdo->rowCount();
    return $result;
}

function getforums(){
  $connexion = getconnexion();
$object = $connexion->prepare('SELECT * FROM forums');
 $object->execute(array());
$forums = $object->fetchAll(PDO::FETCH_ASSOC);
return $forums;
 }




function supprimer($id){
 $connexion = getconnexion();


  $pdo = $connexion->prepare('DELETE FROM forums WHERE id=:id ');
  $pdo->execute(array(
    'id'=>$id,
     
  ));
  return $pdo->rowCount();


}

function modifier($question){
  $connexion = getconnexion();

    $pdo = $connexion->prepare('  UPDATE forums SET question=:question WHERE id=1 ');
  $pdo->execute(array(
    'question'=>$question,
     
  ));
  return $pdo->rowCount();
}
 ?>
