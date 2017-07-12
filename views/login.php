
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="views/style.css">
    <title>Document</title>
</head>
<body>
    <section id= "barre">
    <h1> Codebook </h1>
     <section id="connexion">

            <form action="service/serviceconnect.php" method="post">

                <label> Email </label> 
             
                <input type="text" id="email" name="emails"/>
                <label> Mot de passe </label> 
              
                <input type="password" id="mdps" name="passwords"/>
              


                    <input type="submit" value="valider" id="ok" />
            </form>
        </section>
        </section>
    <header> 
 <ul>
     

        <section id= "formulaire">
           

        <section id="inscription" >
            <h2> Creer un compte </h2> 
            <form  action="service/servicelogin.php" method="post">
      
                <label> Surnom </label>
                <br>
                <input type="text" id="surnom" name="username"/>
                <br>
                <label> Email </label>
                <br>
                
                <<input type="text" id="email" name="email"/>br>
                <label> Mot de passe </label>
                <br>
                <input type="password" id="mdp" name="password"/>
                <br>
                <label> Confirmer Mot de passe </label>
                <br>
                <input type="password" id="cmdp" name="cpassword"/>
                <br>
                

                <label>  Je ne suis pas un robot </label>  
                <input type="checkbox" id="robot"><br>

            
              
                    <input type="submit" value="valider" /> <br>
                    <?php

if(!empty($password) && !empty($username) && !empty($email)){
    if($password==$cpassword){
        echo "Tout est ok";
    }
     
}
else echo "Vous n'avez pas remplis tout les champs obligatoires"; 

?>
            </form> 

        </section>
       
    </section>



</body>
</html>