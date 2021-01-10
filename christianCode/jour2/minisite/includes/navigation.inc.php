<nav>
    <ul class="nav nav-pills justify-content-center flex-column flex-sm-row navbar-light bg-light">
        <li class="nav-item"><a class="nav-link <?php if($pageEnCours=="accueil"){ echo "active";}?>" href="index.php">Accueil</a></li>
        <li class="nav-item"><a class="nav-link <?php if($pageEnCours=="hic"){ echo "active";}?>" href="hic.php">Hic</a></li>
        <li class="nav-item"><a class="nav-link <?php if($pageEnCours=="beatae"){ echo "active";}?>" href="beatae.php">Beatae</a></li>
        <li class="nav-item"><a class="nav-link <?php if($pageEnCours=="contact"){ echo "active";}?>" href="contact.php">Contact</a></li>
    </ul>
</nav>