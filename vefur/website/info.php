<?php
include 'database.php';
$db = new database();
?>

<html>
<head><?php include 'assets.php'; ?></head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <img class="random-image" src="<?php echo $db->getRandomImageUrl() ?>" alt="">
            </div>
        </div>

        <div class="row">
            <a  href="signin.php" class="waves-effect waves-light btn-large">LOG IN</a>
            <a  href="register.php" class="waves-effect waves-light btn-large">REGISTER</a>
        </div>

    </div>



    <?php include 'footer.php'; ?>
</body>
</html>