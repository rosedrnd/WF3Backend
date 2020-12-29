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

    <h1>Exercice 1 de PHP</h1>


    <h2>Exemple a)</h2>

    <?php
    // display exemple a) en HTML
    echo "Hello World!"; 
    ?>

    <h2>Exemple b)</h2>

<?php 
//Définition de variable
    $texteDuParagraphe = "Hello world!"; 
    $entier = 7; 
    $decimal = 10.5;
    $x = 12.5;
    $y = 4;
    $z = $x + $decimal;


    //définition de constant
    define("VITESSE_MAX", 30000); 
    define("AGE_LIMITE", 14); 

    // echo $texteDuParagraphe;
    // echo $entier; 
    // echo $decimal;   

    //valid syntax to display constant
    //echo VITESSE_MAX; 
    //echo " "; 
    //echo constant("VITESSE_MAX");
?> 
<?php echo "<a href='https:google.fr'>".$z."</a>";?> <!--the simple quote fixes the problem-->

<!--exemple avec  une citation-->
<br>
<?php echo 
    "<p> 
        Sayah a dit: 
        <q>BONJOUR</q>
    </p>"
    
?>

<h2>Exemple c)</h2> 

<?php
    //Incrémentation (ajoute 1) 
    $z++;
    $z = $z + 1; // same results as above  
    $z += 1; // same results as above
   
    //décrémentation (retire 1) 
    $z--; 
    $z = $z - 1; // same results as above  (moins utilisé)
    $z -= 1; // same results as above  

    //exemple supplémentatire
    $z= $entier + $entier - $decimal; 

    echo $z; 
?>

<h2>Exemple d:php dans une balise html</h2>
<!--mise en place d'une liste-->
<ul>
<li><?php echo $texteDuParagraphe; ?></li>
<li><?php echo $entier; ?></li>
<li><?php echo $z;?></li>
<li><?php echo $decimal;?></li>
</ul>

<h2>Exemple d:html dans une balise php</h2>
<?php echo "<p>" .$texteDuParagraphe."</p>"; //"." concaténation?> 
<?php echo "<p>Hello World!</p>"; ?> <!--same as above--> 
<?php echo "Hello World!"; // same as above with not tag ?>

<h2> Exemple d: rappel de html et css </h2>

<p class="attention"> 
    Il faut nettoyer la plai avant de metter le 
    pansement sinon ul y a un risque d'infection.
</p>

<p> 
    Vous pouvez appeles les secours en composant le numéro.
</p>

<p class="attention">
    Veillez à ettre CLAIR, BREF et Precis sur le danger et sur le lieu d'accident.
</p>

<h2> Exemple g: les opérateurs php</h2>

<?php
    $x = 20; 
    $y = 6; 
?>
<ul>
    <li><?php echo ($x + $y); //affiche 26 ?></li>
    <li><?php echo ($x - $y); //affiche 14 ?></li>
    <li><?php echo ($x * $y); //affiche 120 ?></li>
    <li><?php echo ($x / $y); //affiche 3.2222222222 ?></li>
    <li><?php echo ($x % $y); //affiche 2 ?></li>
</ul>

</body>

</html>