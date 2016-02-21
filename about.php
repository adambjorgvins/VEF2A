<html>
<head>

    <?php include 'include/assets.php'; ?></head>

<?php include 'include/header.php';
include 'include/database.php';

$db = new database();
?>

<body style="background-image: url('<?php echo $db->getRandomImageUrl() ?>')">


<div class="textabout">


<h1> ABOUT TEXTI :D</h1>
</div>
<div class="container">


    <div class="row">
        <div class="col s12">
            <img class="random-image" src="" alt="">
        </div>
    </div>


<?php include 'include/footer.php'; ?>

</body>
</html>