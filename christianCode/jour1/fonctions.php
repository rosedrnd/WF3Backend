<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fonctions</title>
</head>
<body>
    <!-- coucou commentaire html -->


    <?php
    // commentaire sur une seule ligne
    //------------------- Fonctions ------------------
    // partie théorique
    function faire_bouillir ($temp, $liquide=eau) {
       /* 
        -prendre casserole
        -remplir la casserole du $liquide
        -allumer les plaques
        -attende que $liquide atteigne la $temp;
        */
    }

    // faire_bouillir (80, lait);

    echo "bonjour tout le monde"; // ceci est une fonction avec un argument en fait !!!
    echo "ok";

    // Ecrivez-moi une fonction qui donne le carré d'un nombre !
    $resultatFinal=0;
    // déclare une fonction
    function carre ($nombre) {
        // echo "<p>le carré de ".$nombre." est : ".$nombre*$nombre."</p>";
        $resultat=$nombre*$nombre;
        return $resultat;
    }
    echo "<p>------------------------------</p>";
    $resultatFinal=carre(9);

    // SI VOUS AVEZ COMPRIS CE QU'IL Y A AU DESSUS, ALLONS PLUS LOIN !!!

    define("PI", 3.14159); // definition de contante

    function aire_disque($rayon){
        $aire=PI*carre($rayon);
        return $aire;
    }
    $rayon=10;
    echo "<p>l'aire du disque de rayon ".$rayon." est : ".aire_disque($rayon)."cm².</p>";
    // on a des fonctions imbriquées, ici puisque aire_disque appelle la fonction carre, et se sert de son résultat (grace au return)

    // quelques fonctions usuelles sur les chaines de caractères
    $chaine="Nous voilà, de retour de pause...";
    // strlen
    $longChaine=strlen($chaine);
    echo "<p>La longueur de la chaine \"$chaine\" est : ".$longChaine.".</p>";

    // str_replace
    $chaine2="Plif plaf plouf é ! ê èéà";
    $nouvelle_chaine=str_replace("pl", "m", $chaine2, $toto); // rappel, le dernier argument est facultatif.
    echo $nouvelle_chaine."<br/>";
    echo $toto."<br/>";

    $chaine3="Plif plaf plouf";
  

    // strtoupper : permet de mettre en capitales ( EN CAPITALES versus  bas de casse : "minuscules" -en typographie)
    
    $chaine2Capitale=mb_strtoupper($chaine2);
    echo $chaine2Capitale."<br/>";

    // strtolower : permet de mettre en bas de casse (ou "minuscules")
    $chaine2basdecasse=strtolower($chaine2Capitale);
    echo $chaine2basdecasse."<br/>";
    
    ?>
</body>
</html>