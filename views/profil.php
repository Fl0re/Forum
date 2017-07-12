<?php

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

    
    <section class="barre">
     <a id="Profil" href="index.php?page=profil"> Profil </a>
         <a id="Creer une discussion " href="index.php?page=profil"> Creer une discussion  </a>
          <a id="mesdiscut" href="index.php?page=discut&#valide"> Discussions avec tes amis </a>
       
           <form action="service/servicedeco.php" method="post">
              <input type="submit" value="déconnexion" id="ok" />
            </form>
     </section>
     <h1 id="profil"> PROFIL  </h1>

     <p> Bienvenue 

    <p id='profiluser'>
  
  <?php 
        echo $user['username']; ?>
    </p>
 
    

<section id="infoprofil">


<h4> email : </h4> <br> <?php echo $user['email']; ?>
</section>










    <h1 id="tforum"> FORUM </h1>

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

<session id="forumstyle">
 <?php if (!empty($forums)):
  ?>

        <?php 
 echo"<br>";
  echo "<section id='styletitre'>";
  echo"<p> Sujet: </p>";
       $forums= getforums(); 
       foreach($forums as $result){
                 echo($result["textes"]);
                echo"<br>";
            echo"</section>";    
      }
 echo"<br>";
        foreach($forums as $result){
            
            echo "<section id='styledes'>";
            echo" <form   action='service/servicesupprimer.php'  method='post'>";
                echo" <input  type='submit' value='X' id='ok' />";
                echo"<input type='hidden' name='id' value='{$result['id']}' />";
              echo"</form>";
             
               
               
            
                echo"<br>";
                echo "<div id='username'>";
                echo $user['username'];
                
                echo"<br>";
                echo($result["datecreate"]); 
                echo"</div>";
                echo"<br>";
                echo"<br>";
                echo($result["question"]);   
                echo"<br>";
                echo" <form   action='service/servicecommentaire.php'  method='post'>";
                echo" <input  type='texte' name='commentaire' placeholder='Commentaires' />";
                    echo" <input  type='submit' value='ok'/>";
                     echo"<br>";
                    if (!empty($questions)):
        
       $commentaire= getcommentaire(); 
       foreach($commentaire as $result){
           echo"<section id='com'>";
                echo($user["username"]);
                echo"<br>";
                echo $result['commentaire']; 
                echo"<br>";
               
                echo"<br>";
                echo"</section>";
                
       }    
    endif; 
                echo"<input type='hidden' name='id' value='{$result['id']}' />";
              echo"</form>";
             
           
              
             echo"</section>";
 
     
       }
  ?>
  <?php endif; ?>


 

    
</session>
  <session id="sms">
    

          

    
       <script src="views/jquery-3.2.1.min.js"></script>
    <script src="views/script.js"></script>
</head>
<body>
    
