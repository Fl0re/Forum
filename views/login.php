

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
             
                <input type="email" id="emails" name="email"/>
                <label> Mot de passe </label> 
              
                <input type="password" id="mdps" name="password"/>
              


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
                <input type="text" id="email" name="email"/>
                <br>
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

            
                <p id="p1" class="p"></p>
                <p id="p2"></p>
                <p id="p3"></p>
                <p id="p4"></p>
                <p id="p5"></p>
                <p id="p6"></p>
                    <input type="submit" value="valider" />
            </form> 

        </section>
       
    </section>

    <script src="views/jquery-3.2.1.min.js"></script>
    <script src="views/easing.js"></script>
     <script src="views/script.js"></script>

</body>
</html>