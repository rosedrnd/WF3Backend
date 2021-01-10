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
        // un type de variable :  les tableaux
        // Tableaux numérotés :
        $prenoms=array("Anna","Anne-marie","Catherine","Charlene", "Eva");
        $prenoms2=["Fatima", "Hélène","Houda","Ibtissam"];

        $adresse="20 rue de la paix, 77000, Melun";
        $nina=["Nina","Ngoune Youdjeu", true, 21, $adresse];

        echo "<p>".$prenoms[3]."</p>"; // Charlene
        $prenoms[4]="Merlyn";

        var_dump($prenoms); // permet d'afficher le type de variable en plus
    ?>
    <br>
    <?php
        $prenoms[]="Kahina";
        $prenoms[]="Leoncie";
        var_dump($adresse); 
        // Si je souhaite afficher le contenu de mon tableau : Boucle 
        // on utilise count() qui permet de connaître la longueur (le nbre de valeurs à l'intérieur)
        echo "<p>".count($prenoms)."</p>"; // 5
        for ($i=0; $i<count($prenoms); $i++){
            echo "<p>\$prenoms[".$i."]=".$prenoms[$i]."</p>";
        }

        // Tableaux associatif : 
        $nouha=array("adresse"=>"12 quai de Gaulle, 69006 Lyon", "nom"=>"Chemingi", "prenom"=>"Nouha", "presence"=>true, "age"=>23);
        echo "<p>La longueur du tableau 'nouha' est : ".count($nouha)."</p>"; // 4 
        
        // si je souhaite afficher "Nouha Chemingi habite au 12 quai de Gaulle, 69006 Lyon et a 23ans."
        echo "<p>".$nouha["prenom"]." ".$nouha["nom"]." habite au ".$nouha["adresse"]." et a ".$nouha["age"]."ans.</p>";
        
        // la boucle foreach parcourt tous les éléments du tableau et affiche (ici) uniquement les valeurs
        foreach ($nouha as $valeurs) {
            echo $valeurs."<br>";
        }

        // la boucle foreach parcourt tous les éléments du tableau et affiche le couple Clé / valeurs
        foreach ($nouha as $cle => $valeurs) {
            echo $cle." vaut ".$valeurs."<br>";
        }
        echo "<p>-------------------------------</p>";
        // je change la valeur de "presence" à false : 
        $nouha["presence"]=false;
        foreach ($nouha as $cle => $valeurs) {
            echo $cle." vaut ".$valeurs."<br>";
        }
        // quelques fonctions pour les tableaux
        echo in_array("Kahina", $prenoms); // affiche rien ou 1 :( 
        echo "<br>";
        if( !in_array("Sophia", $prenoms) ){
            echo "la personne est absente du tableau";
        }else{
            echo "la personne est bien présente dans le tableau";
        }

        // array_key_exists
        $cle_recherchee="age";
        if( array_key_exists($cle_recherchee, $nouha) ) {
            echo '<p>la clé "'.$cle_recherchee.'" est bien dans le tableau</p>';
        }else{
            echo '<p>la clé "'.$cle_recherchee.'" n\'est pas dans le tableau</p>';
        }


        // array_search permet de connaitre la position d'une valeur dans un tableau dans le cas d'un tableau numéroté ET d'un tableau associatif.
        // numéroté
        echo "<p>".array_search("Ibtissam", $prenoms2)."</p>"; // 3  (rien si ce n'était pas le cas)

        //associatif : 
        echo "<p>".array_search("Chemingi", $nouha)."</p>"; // retourne "nom"
        echo "<p>".array_search(23, $nouha)."</p>"; // retourne "age"

    ?>
</body>
</html>