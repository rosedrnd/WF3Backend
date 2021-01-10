<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A propos  - minisite</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/monstyle.css">
</head>
<body>
    <!-- div.container-fluid (emmet) -->
    <div class="container-fluid">
        <!-- header+main+footer (emmet) -->
        <!-- ================== header ================== -->
        <header>
            <img src="https://picsum.photos/seed/picsum/100/100" alt="">
            <p>Bienvenue sur mon site</p>
        </header>
        <!-- ================== navigation ================== -->
        <nav>
            <ul class="nav nav-pills justify-content-center flex-column flex-sm-row navbar-light bg-light">
                <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="hic.php">Hic</a></li>
                <li class="nav-item"><a class="nav-link" href="beatae.php">Beatae</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                <li class="nav-item"><a class="nav-link active" href="contact.php">À propos</a></li>
            </ul>
        </nav>
        <!-- ================== main ================== -->
        <main>
            <!-- section>h1{Bienvenue !}+p>Lorem75 (emmet)-->
            <section>
                <h1>À propos</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum voluptatibus quo porro, ad nostrum mollitia, esse dicta hic possimus minus laudantium dolorem, voluptate facilis dolore quidem perspiciatis obcaecati similique! Omnis, est, beatae consequuntur dicta odit officia et nostrum exercitationem magni ipsam laborum ratione, distinctio molestiae soluta. Cupiditate sunt atque quasi magnam nisi harum, assumenda impedit veritatis voluptatum ea dolor tenetur dignissimos quae quaerat delectus reiciendis accusantium iusto ad eveniet blanditiis, reprehenderit numquam laboriosam nam optio.</p>
            </section>
        </main><!-- div qui va accueillir le contenu principal -->
        <!-- ================== footer ================== -->
        <footer>
            <p>Copyright Webforce3 - <a href="#">mentions légales</a> - 2021</p>
        </footer>
    </div>
</body>
</html>