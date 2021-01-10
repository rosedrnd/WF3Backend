<!DOCTYPE html>
<html lang="fr">

<head>
    <?php    
        include 'include/head.inc.php'; 
        ?>
        <title><?php
        echo $pageEnCours="accueil"; 
        ?></title>
    
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
            <h1>Bienvenue</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam accusantium, ipsa facere eum fuga sit
                sed ratione optio necessitatibus delectus, id cupiditate aspernatur, culpa sunt quis? Rem quaerat id
                voluptatum vel esse ab tenetur corrupti consectetur, nisi vitae dicta. Alias neque tempore consequuntur
                pariatur asperiores eos vero molestias nesciunt eaque, qui ullam reprehenderit! Neque nostrum, modi quos
                doloremque nesciunt magnam ab, mollitia cumque facere dolorem sit ea natus cupiditate deserunt corrupti?
                Fugit quisquam beatae earum?</p>
        </section>

    </main>
<!--==========footer============-->


    <footer>
        <?php
            include 'include/footer.inc.php'; 
        ?>
    </footer>

<body>
</hmtl>