<!DOCTYPE html>
<html lang="fr">

<head>
    <?php    
        include 'include/head.inc.php'; 
    ?>
    <title><?php echo $pageEnCours="optio";?></title>
</head>

<body>
    <!--div.container-fluid (emmet)-->
    <div class="container-fluid">
        <!--header+main+footer (emmet)-->
        <!--============header===========-->
        <header>
            <?php
            include 'include/header.inc.php'; 
        ?>

        </header>

        <!--============navigation===========-->
        <nav>
            <?php
            include 'include/navigation.inc.php'; 
        ?>
        </nav>


        <!--============main===========-->
        <main>
            <section>
                <h1>Optio</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam accusantium, ipsa facere eum fuga
                    sit
                    sed ratione optio necessitatibus delectus, id cupiditate aspernatur, culpa sunt quis? Rem quaerat id
                    voluptatum vel esse ab tenetur corrupti consectetur, nisi vitae dicta. Alias neque tempore </p>
            </section>

        </main>
        <!--a div contains the main content of the page-->


        <footer>
            <?php
            include 'include/footer.inc.php'; 
        ?>
        </footer>
    </div>

</body>

</html>