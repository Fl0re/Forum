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

if(!empty($_SESSION['etudiants'])){
  $students = $_SESSION['etudiants'];
}
?>
    <html>
      <head>
        <title>Enregistrement </title>
        <link rel="stylesheet" type="text/css" href="styles.css">
      </head>
      <body>
        <h1>Formulaire enregistrement </h1>
        <h2>Message</h2>
        <?php if (!empty($questions)): ?>
       
   
     <?php endif; ?>

              <?php foreach($questions as $s): ?>
           
            <?php endforeach; ?>
        
      
        <?php else: ?>
           
        <?php endif; ?>
        <h1>Formulaire</h1>
        <form method="post" action="students.php">
          <pre>
                <form  id="formu" action="service/serviceforum.php"  method="post">
    <label> Sujet  </label> <br>
    <input id="sujet" type="text" name="sujet"/> 
    <label> Description </label>
    <textarea id="description" type="text" name="description">


      </textarea>
          
   
         <input type="submit" value="valider" />

       

  ?>
          </pre>
        </form>
      </body>
    </html>