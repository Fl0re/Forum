var $form= $('form');
var $p1= $('#p1');
var $p2= $('#p2');
var $p3= $('#p3');
var $p4= $('#p4');
var $p5= $('#p5');
var $p6= $('#p6');

var $inputs= {
    surnom: $form.find('#surnom'),
 
    email: $form.find('#email'),
    mdp: $form.find('#mdp'),
    cmdp: $form.find('#cmdp'),
    choix : $form.find('#choix'),
    robot : $form.find('#robot')
}

console.log("coucou");

$form.submit(function(event){
   console.log("coucouc");

    
    var surnom = $inputs.surnom.val();
    

    if(surnom.length>10){
        console.log("haaaaaa")
            $p1.show();
            $p1.text("Le surnom doit contenir entree 3 et 10 lettres")
    }
    
    else if(surnom.length<3){
         $p1.show();
            $p1.text("Le surnom doit contenir entre 3 et 10 lettres")
    }

    else{$p1.hide()}


        var mdp  = $inputs.mdp.val();
        var cmdp  = $inputs.cmdp.val();
    if (mdp!=cmdp){
         $p3.show();
    $p3.text("Mots de passe différent")
  
}

  else{  $p3.hide();}

var mdp = $inputs.mdp.val();
if (mdp.length<8){
     $p2.show();
    $p2.text("le mot de passe doit contenir au minimum 8 lettres")
}
 else{  $p2.hide();}


    var email = $inputs.email.val().search('@');
    if( email==-1){
        $p4.text("email invalide")
         $p4.show();
    }
   
else{  $p4.hide();}

    

    var $robot = $inputs.robot;
    if ($robot.is(":not(:checked)") ) {
        $p6.text("cochez cases robot") 
         $p6.show();

    }

    else{ $p6.hide()}


    

})




