



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

      <?php endif; ?> 