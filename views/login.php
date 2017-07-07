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
    <h1> Forum de ta vie </h1>
    <header> 
 <ul>
     

    <section id= "formulaire">
        <section id="inscription" >
            <h2> S'inscrire </h2> 
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
        <section id="connexion">
            <h2> Connexion  </h2> 
        <form>

            <label> Surnom </label>
            <br>
            <input type="text" id="surnoms" name="surnom"/>
            <br>
            <label> Email </label>
            <br>
            <input type="email" id="emails" name="email"/>
            <br>
            <label> Mot de passe </label>
            <br>
            <input type="email" id="mdps" name="email"/>
            <br>


                <input type="submit" value="valider" id="ok" />
</form>
        </section>
    </section>

    <script src="views/jquery-3.2.1.min.js"></script>
    <script src="views/easing.js"></script>
     <script src="views/script.js"></script>

</body>
</html>