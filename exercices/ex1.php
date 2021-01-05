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
        <q>Bonjour l'Histoire!</q>
        et il a aussi ajouté: <q>Hello people</q>
    </p>"
    
?>
<!--espace insécable-->
<h1> Voici un espace insécable&nbsp;?</h2>

<h2>Exemple c)</h2> 

<?php
    //Incrémentation (ajoute 1) 
    $z++; //similaire to "++$z"
    $z = $z + 1; // same results as above  
    $z += 1; // same results as above
   
    //décrémentation (retire 1) 
    $z--; //similaire to "--$z"
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

<h2> Exemple e: les opérateurs arithmétiques php</h2>

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

    <?php 
        $y = 20; 
        $y += 100;
        echo "<li>".$y."</li>"; //affiche 120 
        
        $z = 50; 
        $z -= 25; 
        echo "<li>".$z."</li>"; //affiche 25
        
        $i= 5; 
        $i*= 6; 
        echo "<li>".$i."</li>"; //affiche 30 
        
        $j = 10; 
        $j /=5; 
        echo "<li>".$j."</li>"; //affiche 2 

        $k = 1000; 
        $k %= 7; 
        echo "<li>".$k."</li>"; //affiche 6 

        $o = "Bonjour"; 
        $o .= ", monde ! ";
        echo "<li>".$o."</li>"; //affiche Bonjour, monde ! 
        $o .= $o; 
        echo "<li>".$o."</li>"; //affiche Bonjour, monde ! Bonjour, monde ! 

        //opérateurs de comparaison
    $x = 100;
    $y = "100";
    echo "<li>";
        var_dump($x == $y); // "valeur égale à"
    echo "</li>";

    echo "<li>";
        var_dump($x === $y); // "valeur et type égaux à"
    echo "</li>";

    echo "<li>";
        var_dump($x != $y); // "valeur différente de"
    echo "</li>";

    echo "<li>";
        var_dump($x !== $y); // "valeur et types différents de"
    echo "</li>";

    $a = 50;
    $b = 90;
    echo "<li>";
        var_dump($a > $b); // "strictement supérieur à"
    echo "</li>";

    echo "<li>";
        var_dump($a >= $b); // "supérieur ou égal à"
    echo "</li>";

    echo "<li>";
        var_dump($a < $b); // "strictement inférieur à"
    echo "</li>";

    echo "<li>";
    var_dump($a <= $b); // "inférieur ou égal à"
    echo "</li>";
    ?>
    </ul>

    <h2> Exemple f: les opérateurs logiques php</h2>
    <!--Les opérateurs logiques/Logical operations-->
    <ul>
    <li><?php var_dump(10 AND 0);//ET ?></li>
    <li><?php var_dump(10 OR 0);//OU ?></li>
    <li><?php var_dump(10 && 0);//ET ?></li>
    <li><?php var_dump(10 || 0);//OU ?></li>
    <li><?php var_dump(! true);//NON ?></li>
    </ul>

    <h2> Exemple g&nbsp;: les conditions php</h2>
    
    <?php
    $x=10;
    if ($x >= 10) { //if x is more than to 10 
    echo "<p>Bonjour&nbsp;!</p>"; //display "Bonjour"
    } elseif ($x < 5) { //second condition if the first condition is false
    echo "<p>Salut&nbsp;!</p>"; //display ""Salut"
    } else { 
    echo "<p>Rien à faire&nbsp;!</p>"; //if the second condition is not true then display "Rien à faire"   
    }
    ?>

<?php
    $x=10;
    echo "<p>"; 
    if ($x >= 10) { //if x is more than to 10 
    echo "Bonjour&nbsp;!"; //display "Bonjour"
    } elseif ($x < 5) { //second condition if the first condition is false
    echo "Salut&nbsp;!"; //display ""Salut"
    } else { 
    echo "Rien à faire&nbsp;!"; //if the second condition is not true then display "Rien à faire"   
    }
    echo "</p>";
    ?>

    <!--conditions using time-->
    <?php
    $t = date("H"); // date("H") indicates the current time as a variable

    if ($t < "10") { //time is less than 10 
    echo "Have a good morning!"; 
    } elseif ($t < "20") { //time is less than 20
    echo "Have a good day!";
    } else {               //if the second condition is not true then...
    echo "Have a good night!"; //display this 
    }   
    ?>

    <!--conditions using SWITCH-->
<?php
    $favcolor="red"; //variable given 
    echo "<p>";
    switch ($favcolor) {//  c'est idéal quand il y a plusieurs cas à vérifier  
        case "red": 
            echo "Votre couleur préférée est le rouge&nbsp;!";
        break; //on casse la boucle si c'est vrai
        case "blue":
            echo "Votre couleur préférée est le bleu&nbsp;!";
        break; 
        case "green":
            echo "Votre couleur préférée est le vert&nbsp;!";
        break;
        default:
            echo "Vous n’avez pas de couleur préférée&nbsp;!";
    }
    echo "</p>"; 

    //example loop with while, we should always put a stop condition
    $x = 1; 
    echo "<ul>"; 
     while($x <= 5) {
        echo "<li>$x</li>"; 
        $x++;  
    }
    echo "</ul>";

    //another loop formula but not as commonly used as "while"

    $x = 1;
    echo "<ul>"; 
    do { 
        echo "<li>$x</li>"; 
        $x++;  
    } while($x <= 5); 
    
    echo "</ul>";
      
    //loop "for" is commonly used as "while", the latter is often used by beginners
    
    echo "<ul>"; 
    for ($i =1; $i <= 5; $i++) {
        echo "<li>$i</li>"; //same results as above
    }
    echo "</ul>"; 

  
?>
 <h2> TP 1</h2>
 


<h2> Exemple f&nbsp;: les tableaux et arrays</h2>

<?php
    //Using array

    $cars[0] = "Dacia";
    $cars[1] = "BMW";
    $cars[2] = "Toyota";

    $cars = ["Dacia", "BMW", "Toyota"]; //similar to the 375-377

    $cars = array("Dacia", "BMW", "Toyota", "Peugot"); //an
    echo "<p>".$cars[0]." et ".$cars[1]." et ".$cars[2]."<p>"; //This displays Dacia et BMW et Toyota

    //Counting the number of data in an array 
        //Let's add new items first 
    $cars [] =  "Renault"; 
    $cars [] =  "Mercedes";
        //let now check if it has been added based on their current position 
    echo $cars[4]." et ".$cars[5];    
        //Now let's count    
    echo "<p>".count($cars)."</p>";

    //Browsing a table
    $taille = count($cars);
    echo "<ul>"; 
    for($i = 0; $i < $taille ;$i++) { //as long as the position is less than it's size
        echo "<li> ".$cars[$i]." </li>"; //this will show all items in the array 
    } 
    echo "</ul>";
     
?>
<!-- Exemples d'utilisation correcte de 'ul' et 'ol' -->
<h2> Ma recette de gateau </h2>

<ul>
    <h3> Ingrédients : </h3>
    <li> 100g de farine </li>
    <li> 10g de sucre </li>
    <li> 3 carrés de chocolat </li>
</ul>
<ol>
    <h3> Réalisation : </h3>
    <li> bla bla </li>
    <li> bla bli blou</li>
    <li> bla bli blo</li>
</ol>

<!--associative arrays/tables-->
    <h2>Exemple g&nbsp;: Associative tables</h2>
    <!--There are two ways to do this, the first one is below:-->
<?php   
    $age ["Zakaria"]="27"; 
    $age ["Fatima"]="37"; 
    $age["Rida"]="43"; 

    echo "<p>".$age["Zakaria"]."</p>";
    echo "<p>".$age["Fatima"]."</p>";
    echo "<p>".$age["Rida"]."</p>"; 

    // Second one: the symbol "=>" means an arrow that assigns a value to a variable
    //Loop through associative arrays
    $age = array("Linda"=>"10", "Zakaria"=>"27", "Fatima"=>"37", "Rida"=>"43", "Nadia" =>"15");

    echo "<ul>";
    foreach($age as $name=>$value) {
        echo "<li>".$name." a ".$value." printemps !"."</li>";
        if ($value <= 10) echo "<p>Enfant !</p>";
        else if ($value > 10 && $value < 18) echo "<p>Ado&nbsp;!</p>";
        else if ($value >= 30 && $value < 40) echo "<p>Alors, on a la trentaine&nbsp;?</p>";
        else if ($value == 43) echo "<p>Tu t'apellerais pas Rida, par hasard&nbsp;?</p>";
        else if ($value < 30 && $value >= 20) echo "<p>La vingtaine&nbsp;!</p>";
    }
    echo "</ul>";
    

    //using switch
    $age = array("Linda"=>"10", "Zakaria"=>"27", "Fatima"=>"37", "Rida"=>"43", "Rida" =>"15");
    echo "<ul>";
    foreach($age as $name=>$value) {
        echo "<li>".$name." a ".$value." printemps !"."</li>";
        switch ($value) {
        case ($value <=10): 
            echo "Enfant&nbsp;!";
            break; 
        case ($value > 10 && $value < 18):
            echo "<p>Ado&nbsp;!</p>";
            break; 
        case ($value >= 30 && $value < 40):
            echo "<p>Alors, on a la trentaine&nbsp;?</p>";
            break;
        case ($value == 43): 
            echo "<p>Tu t'apellerais pas Rida, par hasard&nbsp;?</p>";
            break; 
        case ($value < 30 && $value >= 20):  
            echo "<p>La vingtaine&nbsp;!</p>";
            break; 
    }
}  
    echo "</ul>"; 
    echo "<p>".print_r($age)."</p>";

    

  

?>
 <h2>Le Trie</h2>
<!--sorting tables-->
 <?php

$cars= array("Dacia", "BMW", "Toyota"); //creation du tableau

sort($cars); //cette fonction trie les données dans l'ordre alphabétique//
echo "<p>".print_r($cars)."</p>"; //"print_r($cars)" affichage du type de données et les autres informations  

$numbers=array(4,6,2,22,11); //création du tableau
sort($numbers); //tri dans l'ordre croissant
echo "<p>".print_r($numbers)."</p>"; 

rsort ($numbers); //tri dans l'ordre inverse/décroissant rsort= reverse sort 
echo "<p>".print_r($numbers)."</p>";  

//Display either the value or the key
$capitale = array("France"=>"Paris", "Norvege"=>"Oslo", "Sénégal"=>"Dakar", "Inde"=>"New Delhi", "Chine"=>"Pékin", "Méxique"=>"Mexico");
echo "<p>".print_r($capitale)."</p>";
echo "<p>".print_r(array_keys($capitale))."</p>"; //affichage des clefs
echo "<p>".print_r(array_values($capitale))."</p>"; //affichage des valeurs

//in array : find if the value is in the table

$etudiants=array("Zakaria","Fatima","Rida");
if (in_array("Zakaria", $etudiants)) //if Zakaria is in the table etudiants..  
{
echo "Trouvé"; //display this
}
else
{
echo "Non trouvé!"; //if not display 

}
// array_merge : https://www.php.net/manual/fr/function.array-merge.php
/* array_merge() rassemble les éléments d'un ou de plusieurs tableaux en ajoutant les valeurs de l'un à la fin de l'autre. 
Le résultat est un tableau. Si les tableaux d'entrées ont des clés en commun, alors, 
la valeur finale pour cette clé écrasera la précédente. 
Cependant, si les tableaux contiennent des clés numériques, la valeur finale n'écrasera pas la valeur originale, mais sera ajoutée.
Les clés numériques des tableaux d'entrées seront renumérotées en clés incrémentées partant de zéro dans le tableau fusionné.*/




?>



</body>
</html> 