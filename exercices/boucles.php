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
    <title>Boucles</title>
</head>
<body>                                                                                              
  
<a href="http://localhost/WF3Backend/exercices/index.php">Home</a>
<a href="http://localhost/WF3Backend/exercices/exercice.php">Exercises</a>
<a href="http://localhost/WF3Backend/exercices/TP.php">TP</a>
<a href="http://localhost/WF3Backend/exercices/boucles.php">Boucles</a>
<a href="http://localhost/WF3Backend/exercices/array.php">Array</a>


<?php
include 'fonctions.php'; 
tag("Boucles", "h2"); 
//Type de variable: chaines de caractère/entiers/booleens/float/tableaux//

$firstName = "Catherine";  
$lastName = "Bengan"; 
$age = 31;     
$phrase = "tu t\'es réveillée à quelle heure&nbsp;!: phrase"; 
$majority = "true";  //booleene 
$myIdentity = $firstName." ".$lastName; 
echo "<br>"; 
?> 
<h3>For VS While</h3>
<p>For is used when you already know the n times you will do the iteration. Otherwise, we use while.</p>
<a href="https://medium.com/better-programming/how-to-pick-between-a-while-and-for-loop-14ef217c3776">More info</a>


<?php

for($i=$age;$i<41;$i++){
}
echo tag("Dans 10 ans, tu auras ".$i."."); /// 
  
?>



</body>
</html>