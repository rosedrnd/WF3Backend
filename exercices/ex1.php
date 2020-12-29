<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css"/>
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
</body>

</html>