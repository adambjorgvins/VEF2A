

<nav>
    <div class="nav-wrapper">
        <div class="container">
            <a href="index.php" class="brand-logo">Logo</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
            <ul class="right hide-on-med-and-down">
                <li><a href="index.php" <?php if ($currentPage == 'index.php') {echo 'class="currentPage"';} ?> >Home</a></li>
                <li><a href="photos.php" <?php if ($currentPage == 'photos.php') {echo 'class="currentPage"';} ?> >Photos</a></li>
                <li><a href="signin.php" <?php if ($currentPage == 'signin.php') {echo 'class="currentPage"';} ?> >Sing In</a></li>
                <li><a href="register.php" <?php if ($currentPage == 'register.php') {echo 'class="currentPage"';} ?> >Register</a></li>


            </ul>
        </div>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="index.php" <?php if ($currentPage == 'index.php') {echo 'class="currentPage"';} ?> >Explore</a></li>
            <li><a href="profile.php" <?php if ($currentPage == 'profile.php') {echo 'class="currentPage"';} ?> >Profile</a></li>
            <li><a href="#">Mobile</a></li>
        </ul>
    </div>
</nav>