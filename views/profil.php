<?php
session_start();
header('Content-Type: text/html; charset=UTF8');

if(!isset($_SESSION['questions'])){
  //on défini la session en tant que tableau
  //dans le cas ou elle n'existe pas
  $_SESSION['questions']=array();
}

if(!empty($_POST)){
  $_SESSION['questions'][]=$_POST;
}

if(!empty($_SESSION['questions'])){
  $students = $_SESSION['etudiants'];
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="views/styles.css">
    <title>Document</title>
    
    <!--<section id="secmenu">
        <ul id="ulMenu">
            <li> <a href="#profil"> Profil </a> </li>
            <li> <a href="#mesdiscut"> Mes discussions </a> </li>
        
            <li> <a href="#favoris"> discussions favorites </a> </li>
            <li> <a href="#deco"> Deconnexion </a></li>
    
        </ul>

    </section>-->

    
    <section id="barre">
        <a id="accueil" href="/"> Accueil </a>
         <a id="profil" href="/"> Profil </a>
          <a id="mesdiscut" href="/"> Mas discussions </a>
           <a id="favoris" href="/"> Discussions favorite </a>
           <form action="service/servicedeco.php" method="post">
              <input type="submit" value="déconnexion" id="ok" />
            </form>
     </section>
    <h1> FORUM </h1>

    <p> Bienvenue sur le forum </p>
    <!--<section id="seconglet">
        <ul id="ulonglet">
            <li> <a href="#accueil"> Accueil </a> </li>
            <li> <a href="#mode"> Mode </a> </li>
            <li> <a href="#actualité">Actualité </a> </li>
            <li> <a href="#maman"> Maman </a> </li>
            <li> <a href="#bébé"> Bébé </a></li>
            <li> <a href="#cusine"> Cuisine </a></li>
    
        </ul>

    </section>-->
    <div id="bouton">
         <h3>  Creer une discussion  </h2>
    </div>
    <form  id="formu" action="service/serviceforum.php"  method="post">
    <label> Sujet  </label> <br>
    <input id="sujet" type="text" name="sujet"/> 
    <label> Description </label>
    <textarea id="description" type="text" name="description">


      </textarea>
          
     <?php if (!empty($questions)) ?>
         <input type="submit" value="valider" />
    </form>
</head>
<body>
    
