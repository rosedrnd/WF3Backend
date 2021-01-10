<!DOCTYPE html>
<html lang="en">
<head>
        <!-- adding Bootstrap 5.0 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
        </script>
    <!--fontawesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />

    <!-- adding JQuery CDN-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href ="mystyle.css"/>
    <title>Arrays</title>
</head>
<body>                                                                                              
  
<a href="http://localhost/WF3Backend/exercices/index.php">Home</a>
<a href="http://localhost/WF3Backend/exercices/exercice.php">Exercises</a>
<a href="http://localhost/WF3Backend/exercices/TP.php">TP</a>
<a href="http://localhost/WF3Backend/exercices/boucles.php">Boucles</a>
<a href="http://localhost/WF3Backend/exercices/array.php">Array</a>


<?php
include 'fonctions.php'; 
tag("Array", "h2"); 
//Type de variable: chaines de caractère/entiers/booleens/float/tableaux//

$firstName = "Catherine";  
$lastName = "Bengan"; 
$age = 31;     
$phrase = "tu t\'es réveillée à quelle heure&nbsp;!: phrase"; 
$majority = "true";  //booleene 
$myIdentity = $firstName." ".$lastName; 
echo "<br>"; 
?> 

<h3>Two types of creating arrays.</h3>
<p>$prenoms=array("Anna","Catherine", "Charlene");</p>
<p>$prenoms2=["Eva", "Hélène", "Houda", "Ibtissam"];</p>
<p><a href="https://www.w3schools.com/php/php_ref_array.asp">Complete list of array functions</a></p> 

<p>Bellow we will replace Anna with Merlyn and display the content of the array using the attribute count:</p>
<h3>count($prenoms)</h3>
<?php

$prenoms=array("Anna","Catherine", "Charlene");
$prenoms2=["Eva", "Hélène", "Houda", "Ibtissam"]; 
 
$prenoms[0] = "Merlyn"; 
//Display the table using "count"

for ($i=0;$i<count($prenoms); $i++) {
    echo tag($prenoms[$i]); 
}

//Using in array
tag("in_array", "h3");
?>
<p>This array fuction is used to search if a value exists in an array. In our example we want to know if "Merlyn" is in the array $prenom.<br> Using the php codes below:</p>
<img src="images/in_array.png" alt="in_arrayphp"> 

<p>This will show us:<?php
echo in_array("Merlyn", $prenoms);  
?></p>
<p></p>
<h3>In_array in a loop:</h3>
<?php
if (!in_array("Merlyn", $prenoms)) {
    echo tag("Merlyn est absente."); 
}
else {
    echo tag("Merlyn est presente."); 
}
?>
<?php
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
    $nouha["presence"] = true; 
    echo "<p>".array_search("Chemingi", $nouha)."</p>"; // retourne "nom"
    echo "<p>".array_search(23, $nouha)."</p>"; // retourne "age"
    echo "<p>".array_search(true,$nouha,true)."</p>"; //retourne "presence"

?>


</body>
</html>