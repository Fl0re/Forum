<?php
session_start();
header('Content-Type: text/html; charset=UTF8');


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
    
    <div id="bouton">
         <h3>  Creer une discussion  </h2>
    </div>

<session id= "formuforum">
       <form   action="service/servicevraiforum.php"  method="post">
    <label> Sujet  </label> <br>
    <input id="question" type="text" name="question"/> <br>
    <label> Description </label><br>
    <textarea id="textes" type="text" name="textes">
  </textarea> <br> 
      <input type="submit" value="valider" />

    </form>
    
</session>

 <?php if (!empty($forums)):
  ?>

        <?php 

       $forums= getforums(); 
       foreach($forums as $result){
                echo($result["question"]);
                echo"<br>";
                
       }

        foreach($forums as $result){
                echo($result["username"]);
                echo"<br>";
                  echo($result["datecreate"]); 
                 echo"<br>";
                echo($result["textes"]);   
                 echo"<br>";
                 echo"<br>";
                 
               
       
        }
       

  ?>

  <session id="sms">
     <?php endif; ?>

           <?php if (!empty($questions)):?>
        <?php 

       $questions= getquestions(); 
       foreach($questions as $result){
                echo($result["sujet"]);
                echo"<br>";
                
       }

        foreach($questions as $result){
                echo($result["username"]);
                echo"<br>";
                  echo($result["datecreate"]); 
                 echo"<br>";
                echo($result["description"]);   
                 echo"<br>";
                 echo"<br>";
                 
               
       
        }
       

  ?>
     <?php endif; ?>

     <session id="discut">
    <form  id="formu" action="service/serviceforum.php"  method="post">
    
    <label> Discution personne connectées </label>
    <textarea id="description" type="text" name="description">


      </textarea>
          
   
         <input type="submit" value="valider" />

    </form>

    </session>

    </session>
</head>
<body>
    
