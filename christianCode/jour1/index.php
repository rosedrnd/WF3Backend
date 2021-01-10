<!-- emmet plugin est un raccourci : par exemple tapez ! puis tab permet de générer l'entête HTML -->
<!-- ! tab -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <!-- ul>li*5>a>Lorem2 -->
    <ul>
        <li><a href="">Lorem, ipsum.</a></li>
        <li><a href="">Facilis, tempore.</a></li>
        <li><a href="">Asperiores, sint!</a></li>
        <li><a href="">Nam, corporis?</a></li>
        <li><a href="">Suscipit, quia?</a></li>
    </ul>
    <!-- img -->
    <img src="" alt="">
    <!-- type de variable : chaines de caratère / entiers / booleens / float / tableaux -->
    <?php
        $mon_age=44;
        $ma_taille=178;
        $mon_prenom="christian";
        $mon_nom='migliore';
        $phrase='tu t\'es réveillée à quelle heure ?';
        $majorite=true; // booleene false ou true
        $mon_age=$mon_age+1; // $mon_age=45
        $mon_age+=1; // $mon_age=46
        $mon_age+=5; // $mon_age=51
        $mon_age-=10; // 41
        $mon_age*=2; // 82
        $mon_age/=4; // 20.5


        $mon_age=$mon_age+1; // 21.5
        $mon_age+=1; // 22.5
        $mon_age++;  // 23.5
        $mon_age--;  // 22.5
        echo $mon_age;
    ?>
    <h1>coucou</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, sit quibusdam, ipsum nisi sapiente doloribus reiciendis sint sunt voluptatibus in tenetur molestiae nam deserunt modi obcaecati mollitia amet ducimus numquam!</p>
    <?php
        $mon_age+=10;
        echo $mon_age; // 32.5
        // la concatenation, c'est comme apprendre lire B-A BA
        $identite=$mon_nom." ".$mon_prenom;
        echo "<h2>Bonjour, je m'appelle ".$identite.", ça va?</h2>";
    ?>
    <h2>Bonjour, je m'appelle <?php echo $identite; ?>, ça va?</h2> 
    <?php
        $age_user=18;
        echo "<h3>début du test</h3>";
        if ($age_user>=18){
            // dans le cas ou la condition est vraie
            echo "<p>Vous êtes majeur</p>";
        }else{
            echo "<p>Vous êtes mineur</p>";
        }
        echo "<h3>fin du test</h3>";
        // -------------------------------------
        $un_nbre=0;
        echo "<h3>début du test nombre</h3>";
        if ($un_nbre==0){
            echo "<p>le nombre est nul</p>";
        }elseif ($un_nbre<0){
            echo "<p>le nombre est negatif</p>";
        }else{
            echo "<p>le nombre est positif</p>";
        }
        echo "<h3>fin du test nombre</h3>";
        // === 
        $nombre=0;
        $fauxNombre="0";
        echo "<p>test double == ou === <p>";
        if($nombre===$fauxNombre){
            echo "<p>oui, ils sont egaux<p>";
        }
        // dans ce cas, ce n'est pas strictement égal.
        // operateur logiques : le ET et le OU Logique
        $sexe="Feminin"; // ou féminin
        $age=7;
        if($sexe=="Masculin" && $age>18){ // esperluette (ou "et commercial") et donc && est equiv à AND
            echo "<p>l'utilisateur est un homme majeur</p>";
        }
        // OU LOGIQUE
        if($sexe=="Masculin" || $age>18){ // double "pipe"  et donc || est equiv à OR
            echo "<p>ok, ça marche</p>";
        }
        // switch : quand l'utiliser ?
        switch ($age){
            case 0:
            case 1:
            case 2:
                echo "<p>c'est un bébé</p>";
            break;
            case 3:
            case 4:
            case 5:
                echo "<p>un enfant qui va en maternelle</p>";
            break;
            case 6:
                echo "<p>un enfant qui va au CP</p>";
            break;
            default :
                echo "<p>un enfant qui est plus grand que 6ans</p>";
            break; // pas indispensable
        }
    ?>
</body>
</html>