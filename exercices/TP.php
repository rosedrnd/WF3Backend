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


<!--TP 1-->

<!--Déclare une variable $x = 1 et une varibale $y =  835
        -En utilisant la boucle "while" ajoutez successivement 1 à x
        jusqu'à qu'il soit égale à y. Dans ce cas, affichez x et y. -->
        <?php
        $x = 1; 
        $y = 835; 
        echo "<ul>";
        while($x < $y) {
            $x++; 
        }
        echo "<li>$x</li>";
        echo "<li>$y</li>";
        echo "</ul>"; 
?>

<!--Donnez une variante de cette boucle avec la boucle do...while-->

<?php
        $x = 1; 
        echo "<ul>";
        do {
           $x++; 
        } while ($x < $y); 
        echo "<li>$x</li>";
        echo "<li>$y</li>";
        echo "</ul>"; 
?>

<!--Ecrivez une boucle qui affiche les multiples du nombre 7 à 1000.-->
<?php   
     echo "<ul>";  
     for ($i = 7; $x < 1000; $x += 7)
     {
        echo "<li>$x</li>" ;
    }       
    echo "</ul>";       
       
?>
<!--Use the loop "for" to test whether 3457 is a prime number-->
<?php 
    //naive algorithm by AnneMarie
   echo "<p>";
   $j = 3457;   
   for ($i = 2; $i <= $j; $i++) {
        if ($j % $i == 0 &&  $j != $i) {
            echo $j."&nbsp;:&nbsp;n'est pas un nombre premier";
            break; 
        }
        else if ($i == $j) { 
            echo $j."&nbsp;:&nbsp;est un nombre premier"; 
        }    
}       
    echo "</p>";
    
    // alternative algorithm by Houda
    echo "<p>"; 
    $x=3457;
    for ($i = 2; $i < $x; $i++) {
        if ($x % $i == 0)
        {
            echo $x." pas premier";
            break;
        }  
    else if ($i==($x-1))
    {
        echo $x."premier";
    }
}
    echo "</p>"; 
     
?>
</body>

</html>