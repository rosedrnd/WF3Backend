<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucles</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <?php
        $mon_age=44;
        $ma_taille=178;
        $mon_prenom="christian";
        $mon_nom='migliore';
        // a quoi ça sert, une boucle ?
        // for 
        for( $i=0; $i<5; $i++){ // initialisation; condition; "incrémentation" dans cet ordre impérativement
            // ce qu'on doit répéter
            echo "<p>Coucou</p>";
        }
        // exemples de boucles for
        $number=11;
        for($i=$number; $i>0; $i-=2){
            echo $number." ";
            $number-=2;
        }
        $numero=11;
        // ou autre façon de faire : (plus courte)
        for($i=$numero; $i>0; $i-=2){
            echo $i." ";
        }
        // ---- while ----
        $bobo=-5;
        while ($bobo<0){
            echo "<p>aie aie aie ".$bobo."</p>";
            $bobo++;
        }
        // ---- do while ----
        $yes=1;
        do {
            echo "<p>hé oui, je suis bien passé dans la boucle !!!</p>"; // au moins un passage dans la boucle
        } while ($yes>5);

        $nope=1;
        while ($nope>5){
            echo "<p>ouille</p>"; // ne s'affichera pas
            $nope++;
        }

        // pourquoi choisir for plutôt que while ? 
        /* on choisit "while" quand on ne sait pas forcément à l'avance le nombre de passage de boucle
            par exemple : "affiche-moi tous les articles publiés au mois de novembre".
            (on ne sait pas s'il y a 5 ou 29 articles ou plus...) --> while

            Si, en revanche, on ne veut récupérer que les 3 premiers articles du mois de novembre, la boucle "for" serait plus indiquée : 3 passages pour récupérer à chaque fois 1 article.

        */
    ?>
</body>
</html>