<!DOCTYPE html>
<html lang="fr">

<head>
    <?php    
        include 'include/head.inc.php'; 
    ?>
    <title>
        <?php echo $pageEnCours="contact";?>
    </title>
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
            <h2>Contact Us</h2>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

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