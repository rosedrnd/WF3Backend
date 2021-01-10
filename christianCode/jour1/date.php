<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
</head>
<body>
    <?php
        // Les dates en PHP
        // fonction date ?
        $heureNow = date("H:i:s");
        echo "il est exactement: ".$heureNow."<br>";
        $anneeEncours = date("Y");
        echo "Nous en sommes en ".$anneeEncours."<br>";

        // mise en pratique :
        // Affichez moi la date complète et l'heure qu'il est 
        // 1. "Nous sommes le 08 01 2021 et il est 11:55"
        $jour=date("d");
        $mois=date("m");
        $annee=date("Y");
        $heureminute=date("H:i");
        echo "Nous sommes le ".$jour." ".$mois." ".$annee." et il est ".$heureminute;
        echo "<br>";

        // autre version:
        $today = date(" d-m-Y ");
        $heure= date("H:i");
        echo "nous somme le ".$today." et il est ".$heure;

        // ou encore : 
    ?>

    <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y'); ?>. Et il est <?php echo date('h:i');?></p>

    <?php
        //Today with time 
        $today = date("l Y-m-d h:i:s");
        echo "<p>Today is : ". $today."</p>";

        // 2. "Aujourd'hui c'est vendredi 08 janvier 2021, il est 11:55"
        
        $jourSemaine=["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"];
        $mois_fr = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", 
        "septembre", "octobre", "novembre", "décembre");

        $numeroJour=date("w"); // le numéro du jour 5
        $numeroMois=date("n"); // le numéro du mois 1 (pour janvier )

        echo "Aujourd'hui c'est ".$jourSemaine[$numeroJour]." ".$jour." ".$mois_fr[$numeroMois-1]."<br>";

    ?>
</body>
</html>