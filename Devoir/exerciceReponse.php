<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RéponseExercice</title>
</head>
<body>

    <!-- 0.0 If...else
        a) créez une variable $cat (de type chaine de caractère) qui contiendra une catégorie d'article parmi "PC", "livres" ou "autres".
        b) créez une seconde variable $prix (de type number) qui contiendra un prix que vous fixerez.
        c) Enfin, vous calculerez le prix remisé de l'article choisi en applicant les règles suivantes : 
            -si l'article est un PC, dont le prix est inférieur (ou égal) à 900 euros, on applique une réduction de 10%. Si le prix est supérieur à 900 €, on applique une remise de 15%
            -si l'article est un livre, on applique une remise de 5% (quelque soit le prix)
            -si l'article n'est ni un "PC" ni un "livres", on applique une rmise de 2%.
        Vous afficherez un message du type : "Pour l'achat d'un PC au prix de XXX €, vous aurez droit à une remise de XX%, soit un prix de XXX €"
                                             ou "Pour l'achat de livre au prix de XXX €, vous aurez droit à une remise de 5%, soit un prix de XXX €"
                                             ou enfin "Pour tout article hors livre et PC, au prix de XXX €, vous bénéficiez de 2% de remise, soit un prix de XXX€"
        Exemple 1:
        $cat = "PC";
        $prix = 1200;
        // on affiche :
        "Pour l'achat d'un PC au prix de 1200 €, vous aurez droit à une remise de 15%, soit un prix de  1020 €"

        Exemple2:
        $cat = "livres";
        $prix = 35;
        // on affiche :
        "Pour l'achat de livres au prix de 35 €, vous aurez droit à une remise de 5%, soit un prix de 33.25 €"*/ -->
    <!--O.O Réponse -->
    <?php
        $cat = ["PC", "livres", "BD", "siege","sac"]; 
        $prix = [2500, 30, 35, 250, 50]; 

        $cat = "PC"; 
        $prix = 3000; 
        if ($cat == "PC" && $prix <= 900) {
                $remise= $prix * .10;
                $reduction = $prix -$remise;  
                echo "Pour l'achat d'un PC au prix de $prix €, vous aurez droit à une remise de 10%, soit un prix de $reduction €"; 
            }
        elseif ($cat == "PC" && $prix >= 900) {
            $remise= $prix * .15;
            $reduction = $prix -$remise;  
            echo "Pour l'achat d'un PC au prix de $prix €, vous aurez droit à une remise de 15%, soit un prix de $reduction €"; 
        }
        elseif ($cat == "livres") {
            $remise= $prix * .5;
            $reduction = $prix -$remise;  
            echo "Pour l'achat de livre au prix de $prix, vous aurez droit à une remise de 5%, soit un prix de $reduction €"; 
        }

        else {
            $remise = $prix * .2; 
            $reduction = $prix - $remise; 
            echo "Pour tout article hors livre et PC, au prix de $prix €, vous bénéficiez de 2% de remise, soit un prix de $reduction"; 
        }
    ?>
    <!--1.0 Créer une fonction from scratch qui s'appelle plusPetit(). 
          Elle aura comme argument un array. 
          Elle devra retourner le plus petit des élements présent dans l'array. 
          Si l'array est vide, il faudra retourner null;

          Exemple : 
          $tableauExemple1=[112,50,85,125,13,78,300];
          plusPetit($tableauExemple1); devra afficher un truc du genre : "la plus petite valeur du tableau est 50".
          
          Exemple2 : 
          $tableauExemple2=[];
          plusPetit($tableauExemple2); devra afficher : null -->
  
    <!--1.0 Réponse -->
    <?php
    
        function plusPetit( array $tableau) {
                if ($tableau == []){
                    echo "<p>null</p>"; 
                }
                else {
                    $smallestNumber = min($tableau);  
                    echo "<p>la plus petite valeur du tableau est ".$smallestNumber."</p>";    
                }  
        }
        $tableauExemple1=[700, 78, 90, 50];
        plusPetit($tableauExemple1); 
    ?>
    <!--1.1 Améliorez cette fonction en la renommant plusPetit2().
            Elle se comportera comme la fonctionplusPetit() mais précisera en plus l'indice de la valeur la plus petite.

            Exemple : 
            $tableauExemple1=[112,50,85,125,13,78,300];
            plusPetit2($tableauExemple1); devra affficher : "la plus petite valeur du tableau est 50. Cette valeur se trouve à l'indice 1". -->
    <!--1.1 Réponse -->          
    <?php
        function plusPetit2(array $tableau) {
        if ($tableau == []){
            echo "<p>null</p>"; 
        }
        else {
            $smallestNumber = min($tableau);
            $index = array_search($smallestNumber, $tableau); 
            echo "<p>la plus petite valeur du tableau est ".$smallestNumber.". Cette valeur se trouve à l'indice ".$index."</p>";   
            }  
        }
        $tableauExemple2=[700, 78, 90, 50];
        plusPetit2($tableauExemple2); 
    ?>
    <!--2.0 Créer une fonction from scratch qui s'appelle listePuceHTML(). 
        Elle prendra deux arguments : 
            -Une chaîne de caractères (string) quui sera le titre (voir exemple)
            -Un tableau (array) qui contient les éléments de la liste
        Elle devra retourner une liste <ul> HTML. Chaque élément de cette liste <li> viendra du tableau passé en paramètre.
        Si le titre est null ou vide il faut que la fonction retourne null. Si l'array est vide, il faut que la fonction retourne null.

        Exemple : 
        $titre="liste Marché";
        $tableauLegumes=["Aubergine", "Navet", "Courgette", "Oignon","Artichaut"] 
        listePuceHTML($titre, $tableauLegumes); devra afficher une liste :
            <h2>liste Marché</h2>
            <ul>
                <li>Aubergine</li>
                <li>Navet</li>
                <li>Courgette</li>
                <li>Oignon</li>
                <li>Artichaut</li>
            </ul>-->
    <!--2.0 Réponse --> 
    <?php
        function listePuceHTML($titre, array $legumes) {
            if ($titre == 0 ){
                echo "<p>null</p>"; 
                }
            else {
                echo "<h1>".$titre."</h1>"; 
            }    
            for ($i=0; $i<count($legumes); $i++){
                echo "<ul><li>".$legumes[$i]."</li></ul>"; 
                }
                if ($legumes ==[]){
                    echo "<p>null</p>"; 
                }
        }
        $titre= "Liste Marché";
        $tableauLegumes=["Aubergine", "Navet", "Courgette", "Oignon","Artichaut"]; 
        listePuceHTML($titre, $tableauLegumes); 
    ?>    

    <!--2.1 Variante : affichez la liste <ul><li> avec les légumes (si on reprend le même exemple ci-dessus) mais CLASSÉS dans l'ordre alphabétique
            <ul>
                <li>Artichaut</li>
                <li>Aubergine</li>
                <li>Courgette</li>
                <li>Navet</li>
                <li>Oignon</li>
            </ul> -->
    <!--2.1 Reponse -->
    <?php
                function listePuceHTML2($titre, array $legumes) {
                    if ($titre == 0 ){
                        echo "<p>null</p>"; 
                        }
                    else {
                        echo "<h1>".$titre."</h1>"; 
                    }    
                    for ($i=0; $i<count($legumes); $i++){
                        sort ($legumes); 
                        echo "<ul><li>".$legumes[$i]."</li></ul>"; 
                        }
                        if ($legumes ==[]){
                            echo "<p>null</p>"; 
                        }
                    }
                $titre= "Liste Marché";
                $tableauLegumes=["Aubergine", "Navet", "Courgette", "Oignon","Artichaut"]; 
                listePuceHTML2($titre, $tableauLegumes); 
    ?>
    <!-- 3.Créer une fonction from scratch qui s'appelle remplacerCertainesLettres(). 
        Elle prendra un argument de type string. 
        Elle devra retourner cette même string mais en remplacant les e par des 3, les i par des 1 et les o par des 0 
        (indice : utilisez une fonction de php qu'on a vu ...)
        
        Exemple :
        $chaine1 = "Bonjour les amis";
        remplacerCertainesLettres($chaine1) devra afficher : B0nj0ur l3s am1s  // Notez qu'on conserve la casse ;)
        
        Exemple2 :
        $chaine2 =  "Les cours de programmation Web sont trop cools"
        remplacerCertainesLettres($chaine2) devra afficher : L3s c0urs d3 pr0grammat10n W3b s0nt tr0p c00ls -->
    <!--3.0 Réponse-->
    <?php
        function remplacerCertaineslettres($string) { 
            $nouvellechaine = str_replace(array("e", "i", "o"), array("3", "1", "0"), $string);
            echo "<p>".$nouvellechaine."</p>"; 
        }

        $chaine1= "Bonjour les amis";
        remplacerCertaineslettres($chaine1);
        $chaine2= "Les cours de programmation Web sont trop cools"; 
        remplacerCertaineslettres($chaine2);
    ?>
</body> 
</html>
    
    