<nav>
    <!--nav>ul>li*4>a>lorem1-->

    <ul class="nav nav-pills nav-justified justify-content-end flex-column flex-md-row navbar-list text-white bg-light">
        <!--to write on multiple lines the same thing ctrl+alt+scrolldown-->
        <li class="nav-item"><a class="nav-link <?php if($pageEnCours=="accueil") {echo "active";}?>" href="index.php"><i class="fas fa-home"></i> Home</a></li>
        <li class="nav-item"><a class="nav-link <?php if($pageEnCours=="optio") {echo "active";}?>" href="optio.php">Optio</a></li>
        <li class="nav-item"><a class="nav-link <?php if($pageEnCours=="ratio") {echo "active";}?>" href="ratio.php">Ratione</a></li>
        <li class="nav-item"><a class="nav-link <?php if($pageEnCours=="contact") {echo "active";}?>" href="contact.php">Contact</a></li>
    </ul>

</nav>