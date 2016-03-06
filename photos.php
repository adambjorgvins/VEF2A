<html>
<head><?php include 'include/assets.php'; ?></head>
<body>


<?php include 'include/header.php'; ?>

<?php
include 'include/database.php';
$db = new database();
?>

<div class="container">
    <h1><?php echo $db->currentUserName() ?>
    </h1>



    <div class="row">
            <div class="file-field input-field col s12">
            <div class="btn">
                <span>File</span>
                <input type="file">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
            </div>
        </div>
    </div>
    <form action="photos.php" method="post">
        <input type="file">

        <input type="submit">
        
        
    </form>
     
    

        <div class="row">
            <div class="col s3">
                <img width="100%" src="http://www.wallpapereast.com/static/images/lion-picture-best-HD-wallpaper.jpeg" alt="">
            </div>
            <div class="col s3">
                <img width="100%" src="http://www.wallpapereast.com/static/images/lion-picture-best-HD-wallpaper.jpeg" alt="">
            </div>
            <div class="col s3">
                <img width="100%" src="http://www.wallpapereast.com/static/images/lion-picture-best-HD-wallpaper.jpeg" alt="">
            </div>
            <div class="col s3">
                <img width="100%" src="http://www.wallpapereast.com/static/images/lion-picture-best-HD-wallpaper.jpeg" alt="">
            </div>
        </div>

        <div class="row">
            <div class="col s3">
                <img width="100%" src="http://www.wallpapereast.com/static/images/lion-picture-best-HD-wallpaper.jpeg" alt="">
            </div>
            <div class="col s3">
                <img width="100%" src="http://www.wallpapereast.com/static/images/lion-picture-best-HD-wallpaper.jpeg" alt="">
            </div>
            <div class="col s3">
                <img width="100%" src="http://www.wallpapereast.com/static/images/lion-picture-best-HD-wallpaper.jpeg" alt="">
            </div>
            <div class="col s3">
                <img width="100%" src="http://www.wallpapereast.com/static/images/lion-picture-best-HD-wallpaper.jpeg" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <img width="100%" src="http://www.wallpapereast.com/static/images/lion-picture-best-HD-wallpaper.jpeg" alt="">
            </div>
            <div class="col s3">
                <img width="100%" src="http://www.wallpapereast.com/static/images/lion-picture-best-HD-wallpaper.jpeg" alt="">
            </div>
            <div class="col s3">
                <img width="100%" src="http://www.wallpapereast.com/static/images/lion-picture-best-HD-wallpaper.jpeg" alt="">
            </div>
            <div class="col s3">
                <img width="100%" src="http://www.wallpapereast.com/static/images/lion-picture-best-HD-wallpaper.jpeg" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col s3">
                <img width="100%" src="http://www.wallpapereast.com/static/images/lion-picture-best-HD-wallpaper.jpeg" alt="">
            </div>
            <div class="col s3">
                <img width="100%" src="http://www.wallpapereast.com/static/images/lion-picture-best-HD-wallpaper.jpeg" alt="">
            </div>
            <div class="col s3">
                <img width="100%" src="http://www.wallpapereast.com/static/images/lion-picture-best-HD-wallpaper.jpeg" alt="">
            </div>
            <div class="col s3">
                <img width="100%" src="http://www.wallpapereast.com/static/images/lion-picture-best-HD-wallpaper.jpeg" alt="">
            </div>
        </div>

    </div>

    <?php include 'include/footer.php'; ?>
</body>
</html>