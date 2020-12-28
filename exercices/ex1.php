<!DOCTYPE html>
<html>

<body>

    <h1>Exercice 1 de PHP</h1>


    <h2>Exemple a)</h2>

    <?php
    // display exemple a) en HTML
    echo "Hello World!"; 
?>

    <h2>Exemple b)</h2>

    <?php 
    $texteDuParagraphe = "Hello world!"; 
    $entier = 7; 
    $decimal = 10.5;
    $x = 3; 
    $y = 4;
    $z = $x + $decimal;


    //définir un constant
    define("VITESSE_MAX", 30000); 
    define("AGE_LIMITE", 14); 

    // echo $texteDuParagraphe;
    // echo $entier; 
    // echo $decimal;   

    // display constant, echo $VITESSE_MAX is not valid because it is not a variable
    echo $VITESSE_MAX; 
    //valid syntax to display constant
    echo VITESSE_MAX; 
    echo " "; 
    echo constant("VITESSE_MAX");
    
?>

</body>
</hmtl>