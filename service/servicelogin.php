<?php

include "../model/fonctions.php";
  $username= $_POST["username"];
  $email = $_POST["email"];
  $uPassword= $_POST["password"];

/**
 * Il faut étoffer ce service en lui ajoutant peut-être des controle
 * je sais que tu as deja fait des controle dans le front (js/htlm)
 * Fait attention le forumaire s'inscrire se soumet  meme si on ne remplit
 * rien.
 *
 * Comme on avait conlcu il vaut mieux que tu controles presque tout
 * en dans le service car n'importe qui peut avoir son propre html
 * et js et faire les appels qu'ils veulent en backend.
 *
 * Cependant pour ne pas faire doublons on va pas controler ce qui est
 * fait dans ton javascript mais plutôt
 * controler que l'email n'existe pas déjà en base de données ainsi
 * que le username(s'il est déjà pris ce n'est pas bon)
 *
 * Essaie d'implementer les services. comme tu n'étais pas là
 * évidemment ce sera le plus dur à faire.
 *
 * On en reparle
 *
*/
$result= inscription($username, $email, $password);


if($result==1){
    header("location: ../index.php?page=login&inscription=succes");
}

?>