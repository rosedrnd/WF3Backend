<!DOCTYPE html>
<html>
<head lang="fr">

    <!--pour déclarer un utf8 sur le fichier php/hmtl -->
    <meta charset="UTF-8">
    <!--mise en place favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_package_v0.16/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_package_v0.16/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_package_v0.16/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

</head>   
<body>

<?php
include 'fonctions.php'; 
  /*Exercice 1: Écrire un tableau qui contient tous les mois de l'année puis l'afficher
    grâce aux 3 différentes boucles (for, while et do,while).*/
    echo tag("Exercice 1", "h2"); 
    // for
    echo tag("For", "h2"); 
    
    $mois = array("janvier", "février", "mars", "avril", 
                    "mai", "juin", "juillet", "août",   
                    "septembre", "octobre", "novembre", "décembre"); 
    $taille = count($mois); 
    echo "<ul>"; 
    for($i = 0; $i < $taille; $i++) { 
        echo "<li> ".$mois[$i]." </li>"; 
    } 
    echo "</ul>";
    
    // for while
    echo tag("For et While","h3"); 

    $i = 0; 
    echo "<ul>"; 
    while($i < $taille ) {
        echo "<li> ".$mois[$i]." </li>"; 
        $i++; 
    } 
    echo "</ul>";

    // do while
    echo "<h3>"."Do et While"."</h3>"; 

    $i = 0; 
    echo "<ul>"; 
    do {
        echo "<li> ".$mois[$i]." </li>"; 
        $i++; 
    }
    while($i < $taille );  
    echo "</ul>";
    // We can also use foreach to get the same results

    $i= 0; 
    foreach($mois as $mois[$i]) {
        echo $mois[$i]; 
    }

    /*Exercice 2: Écrire un tableau associatif, qui associe des pays à des capitales 
    (France, Norvège, Sénégal, Inde, Chine, Mexique).
    Afficher ces capitales grâce à un foreach.*/ 
    echo "<h2>"."Exercice 2"."</h2>"; 
    $capitale = array("France"=>"Paris", "Norvege"=>"Oslo", "Sénégal"=>"Dakar", "Inde"=>"New Delhi", "Chine"=>"Pékin", "Méxique"=>"Mexico"); 
    echo "<ul>"; 
    foreach($capitale as $capitaleDonnee) {
        echo "<li>".$capitaleDonnee."</li>"; 
    }
    echo "<br>"; 
    echo "<li>".$capitale["Sénégal"]."</li>";
    echo "</ul>"; 

/*Exercice 3:
    Écrire un tableau x avec comme données "A", "B", "C" et "D".
    Un tableau y avec comme données "E", "F", "G" et "H"*/
    echo "<h2>"."Exercice 3"."</h2>"; 

    $x = array("A","B","C","D"); 
    $y = array("E","F","G", "H");
    
    // À l'aide d'une boucle de votre choix, mettre y à la suite de x.

    for($i=0; $i < count($y); $i++) {
        $x[] = $y[$i]; 
    }

    //  À l'aide d'une boucle de votre choix, afficher x.
    echo "<ol type = 'A'>"; 
    foreach ($x as $letter) {
    echo "<li>".$letter."</li>"; 
    }
    echo "</ol>"; 

    //using foreach 

    
    foreach ($y as $letter){
        $x [] = "$letter"; 
    }
    echo "<ol type = 'A'>"; 
    foreach ($x as $letter){
        echo "<li>".$letter."</li>"; 
    }
    echo "</ol>";    
    

echo tag("Exercice 4", "h2"); 

 /*Exercice 4; Modifier la fonction writeMsg() 
 pour qu'elle accepte un troisième argument: l'entier $repetition. et qui repetera 
 le echo autant de fois que $réptition*/ 
 
function writeMsg($firstname, $name, $repetition){ 
    for ($counter = 0; $counter < $repetition;  $counter++)  //($counter = 1; $counter <= $repetition;   $counter++)  
            paragraphe("Hello ".$firstname." ".$name."!"); 
    }
    writeMsg("Catherine", "Rose", 3); //call the parameter

    
   /* 2) Écrire une fonction parapgraph() qui prend en argument une chaîne de caractères
    et qui l'entoure d'une balise <p> */
   
    function paragraphe($balise) {
       echo "<p>".$balise."</p>"; 
    }    
   

    /*3) Modifier writeMsg() pour qu'elle appelle la fonction paragraph() afin 
    de renvoyer un résultat correct pour le web */
    //une autre manière de le faire 
    function writeMsgModified ($firstName, $name, $repetition) {
        for ($i = 0; $i < $repetition; $i++) {
            $balise = "Hello ".$firstName." ".$name. "!";
            paragraphe($balise);
        }
    }
    writeMsgModified("Chacha", "Kanda",3); // appel de fonction

    paragraphe("The Title here");

echo tag("Exercice 5", "h2"); 




/* 1) Écrire une fonction compare(), qui prend deux arguments et compare leur valeur
    (égalité, plus grand ou plus petit que).Exemple d'utilisation :
    compare(12, 24);
    12 est plus petit que 24 !*/

    function Comparison($x, $y) {
        if ($x < $y ) {
            echo tag($x." est inférieur à ". $y); 
        }
        elseif ($x > $y ) {
            echo tag($x." est supérieur à ". $y);         
        }
        else {
            echo tag($x." est égal à ". $y); 
        }
    }
   Comparison(12,24);

    
tag("Écrire une fonction jumpsToZero() qui prend comme argument un nombre eniter positif et qui
    affiche e compte d'un nombre sur deux jusqu'à zéro inclus
    Exemple d'utilisation :
    jumpsToZero(11);
    9
    7
    5
    3
    1"); 
function jumpsToZero($number) {
    while ($number > 0) {
        echo tag($number); 
        $number -= 2; 
    }
}    
jumpsToZero(11); 


 

?>


</body>
</html> 