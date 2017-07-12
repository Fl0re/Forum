
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="views/styles.css">
    <link rel="stylesheet" href="views/styyle.css">
    <title>Document</title>

 <section class="barre">
      <a id="Profil" href="index.php?page=profil"> Accueil </a>
         <a id="Creer une discussion " href="index.php?page=profil"> Profil </a>
          <a id="mesdiscut" href="index.php?page=discut"> Discussions avec tes amis </a>
           <form action="service/servicedeco.php" method="post">
              <input type="submit" value="déconnexion" id="ok" />
            </form>
     </section>




<section id="messagess">
 <?php if (!empty($questions)):?>
        <?php 

       $questions= getquestions(); 
       foreach($questions as $result){
                echo($result["sujet"]);
                echo"<br>";
                
       }
     
        foreach($questions as $result){
            echo"<section id='bulle'>";
            echo"<div id='usr'>";
                echo $user['username'];;
                echo"<br>";
                  echo($result["datecreate"]); 
                 echo"<br>";
                 echo"</div>";
                 echo"<br>";
                 echo"<div id='descri'>";
                echo($result["description"]);   
                 echo"<br>";
                echo"</div>";
                 echo"</section>";
            
       
       
        }
       

  ?>
     <?php endif; ?>
     
   
     <section id="discut">
    <form  id="formu" action="service/serviceforum.php"  method="post">
    


    <div id ="validersms">
    <label> Discution personne connectées </label>


      
    <textarea id="description" type="text" name="description">


      </textarea>
          
 
         <input  id="valide" type="submit" value="valider" />
</div>
    </form>

    </section>
</section>
 
    </head>
<body>