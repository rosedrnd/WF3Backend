<!DOCTYPE html>
<html lang="fr">
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
    <title>Functions:Date</title>
</head>
<body>                                                                                              
<!--Menu-->  
<a href="http://localhost/WF3Backend/exercices/index.php">Home</a>
<a href="http://localhost/WF3Backend/exercices/exercice.php">Exercises</a>
<a href="http://localhost/WF3Backend/exercices/TP.php">TP</a>
<a href="http://localhost/WF3Backend/exercices/boucles.php">Boucles</a>
<a href="http://localhost/WF3Backend/exercices/array.php">Array</a>
<a href="http://localhost/WF3Backend/exercices/fonctions.php">Functions</a>

<?php
include 'fonctions.php'; 
} 
tag("Functions", "h2");  
?>
<h3>Exercise</h3>
<p>ise en pratique :
        // Affichez moi la date complète et l'heure qu'il est 
        // 1. "Nous sommes le 08 01 2021 et il est 11:55"

        // 2. "Aujourd'hui c'est vendredi 08 janvier 2021, il est 11:55"</p>

<?php
$day= date("d");
$month= date("m"); 
$year= date("Y"); 
$hour= date("H:i"); 
$dayInWords= date("D"); 
$monthInWords= date("F");

echo tag("Nous sommes le ". $day." ".$month." ".$year." "."et il est ".$hour.".");
echo tag("Aujourd'hui c'est"." ".$dayInWords." ".$monthInWords." "."et il est ".$hour.".");

$numeroJour= date("w"); //le numero de jour
$numeroMois= date("n"); //le numero de mois
$jourSemaine=["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"];
$mois_fr = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", 
        "septembre", "octobre", "novembre", "décembre");

echo tag("Aujourd'hui c'est ".$jourSemaine[$numeroJour]." ".$day." ".$mois_fr[$numeroMois-1]." "."et il est ".$hour."."); 
?>
<a href="https://www.php.net/manual/fr/datetime.format.php">List of Date Function Format</a>
</body>
</html>