
<?php
    $loggedIn = isset($_SESSION["user"]);
?>
<nav>
    <div class="nav-wrapper">
        <div class="container">
            <a href="index.php"><img class="logo" src="img/logo.png" alt=""></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
            <ul class="right hide-on-med-and-down">
                <li><a href="index.php" <?php if ($currentPage == 'index.php') {echo 'class="currentPage"';} ?> >Home</a></li>

                <?php if ($loggedIn){ ?>

                    <li><a href="photos.php" <?php if ($currentPage == 'photos.php') {echo 'class="currentPage"';} ?> >Photos</a></li>
                    <li><a href="include/signout.php" <?php if ($currentPage == 'signout.php') {echo 'class="currentPage"';} ?> >Sign out</a></li>

                <?php } else { ?>

                    <li><a href="signin.php" <?php if ($currentPage == 'signin.php') {echo 'class="currentPage"';} ?> >Sign In</a></li>
                    <li><a href="register.php" <?php if ($currentPage == 'register.php') {echo 'class="currentPage"';} ?> >Register</a></li>

                <?php } ?>


            </ul>
        </div>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="index.php" <?php if ($currentPage == 'index.php') {echo 'class="currentPage"';} ?> >Explore</a></li>
            <li><a href="profile.php" <?php if ($currentPage == 'profile.php') {echo 'class="currentPage"';} ?> >Profile</a></li>
            <li><a href="#">Mobile</a></li>
        </ul>
    </div>
</nav>

