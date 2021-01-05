<!DOCTYPE html>
<html>
<head lang="fr">

    <link rel="stylesheet" href="style.css"/>
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
  /*Exercice 1: Écrire un tableau qui contient tous les mois de l'année puis l'afficher
    grâce aux 3 différentes boucles (for, while et do,while).*/
    echo "<h2>"."Exercice 1"."</h2>"; 
    // for
    echo "<h3>"."For"."</h3>"; 
    
    $mois = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre"); 
    $taille = count($mois); 
    echo "<ul>"; 
    for($i = 0; $i < $taille; $i++) { 
        echo "<li> ".$mois[$i]." </li>"; 
    } 
    echo "</ul>";
    
    // for while
    echo "<h3>"."For et While"."</h3>"; 

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

    /*Exercice 2: Écrire un tableau associatif, qui associe des pays à des capitales 
    (France, Norvège, Sénégal, Inde, Chine, Mexique).
    Afficher ces capitales grâce à un foreach.*/ 
    echo "<h2>"."Exercice 2"."</h2>"; 
    $capitale = array("France"=>"Paris", "Norvege"=>"Oslo", "Sénégal"=>"Dakar", "Inde"=>"New Delhi", "Chine"=>"Pékin", "Méxique"=>"Mexico"); 
    echo "<ul>"; 
    foreach($capitale as $capitaleDonnee) {
        echo "<li>".$capitaleDonnee."</li>"; 
    } 
    echo "</ul>"; 

/*Exercice 3:
    Écrire un tableau x avec comme données "A", "B", "C" et "D".
    Un tableau y avec comme données "E", "F", "G" et "H"*/
    echo "<h2>"."Exercice 3"."</h2>"; 

    $x = array("A","B","C","D"); 
    $y = array("E","F","G", "H");
    
    // À l'aide d'une boucle de votre choix, mettre y à la suite de x.
    echo "<p>"; 
    $taille = count($x);  
    for ($i = 0;$i < $taille;$i++) {
        echo $x[$i].$y[$i]; 
    } 
    echo "</p>"; 

    //  À l'aide d'une boucle de votre choix, afficher x.
    echo "<ul>"; 
    for ($i = 0; $i< $taille; $i++) {
    echo "<li>".$x[$i]."</li>"; 
    }
    echo "</ul>"; 
?>
</body>
</html> 