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
    <title>Functions</title>
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
function tag($phrase, $TagName ="p") {
    echo "<".$TagName.">".$phrase."</".$TagName.">"; //This allows us to automate tags, with "p" as default
} 
tag("Functions", "h2"); 
$heureNow = date("H:i:s"); 
?>
<div class="date"><?php echo $heureNow;?></div>
<p>Let's create a function that gives as the square of a number. The results will look like these:</p>
<?php
function carré($x) {
    $z = $x*$x; 
    return $z; 
}
echo tag(carré (4)); 
echo tag(carré (78)); 
?>
<p>As php codes, the above results look like this:</p>
<img src="images/function.png" alt="function">
<p>Let's reuse the function in another calculation. Note that using "return" instead of "echo" allows us to do this. It's practical and more flexible to use "return" instead of "echo" in a function.</p>
<?php
define("PI", 3.1459); //declaring a constant

function aireDeDisque($rayon){ 
    $results = PI * carré($rayon); 
    return $results; 
}
$results2= aireDeDisque(9); 
echo $results2; 
?>

</body>
</html>