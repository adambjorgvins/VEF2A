<?php
session_start();
include 'include/database.php';
$db = new database();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <?php include "include/assets.php";?>
    </head>

    <body style="background-image: url('<?php echo $db->getRandomImageUrl() ?>')">


        <?php include 'include/header.php'; ?>


        <div class="content">

            <img class="random-image" src="" alt="">
            <div class="container">

                <div class="row">
                    <div class="col s12">

                    </div>
                </div>

                <?php include 'include/login.php'; ?>

            </div>

        </div>


        <?php include 'include/footer.php'; ?>

    </body>
</html>

