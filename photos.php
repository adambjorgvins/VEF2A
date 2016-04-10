
<?php
require_once('include/User.php');
session_start();
use File\Upload; # declaration, so you can refer to the class as Upload rather than using the fully qualified name
$file_url = null;

$u = $_SESSION['user'];
$us = json_encode($u);
echo "</br>";
echo $us;
echo "</br>";
$usu = json_decode($us);
echo "</br>";
echo $usu->email;
echo "</br>";

if (isset($_POST['upload'])) {
    // define the path to the upload folder (DOCUMENT_ROOT er /var/www/adambjorgvins.com/public_html á servernum)
    // destination verður "/var/www/adambjorgvins.com/public_html/upload/images/"
    $server_path_to_upload_folder = $_SERVER['DOCUMENT_ROOT'] . "/upload/images/" . $u->email . "/";  # Þú þarft að breyta slóð.
    if (!file_exists($server_path_to_upload_folder)) {
        mkdir($server_path_to_upload_folder);
    }

    // svo við getum notað class með t.d. move() fallið og getMessage() ogsfrv...
    require_once 'include/Upload.php';
    // Because the object might throw an exception
    try {
        // búum til upload object til notkunar.  Sendum argument eða slóðina að upload möppunni sem á að geyma skrá
        $loader = new Upload($server_path_to_upload_folder);
        // köllum á og notum move() fallið sem færir skrá í upload möppu, þurfum að gera þetta strax.
        $file_url = "/upload/images/" . $u->email . "/" . $loader->upload();
        // köllum á getMessage til að fá skilaboð (error or not).
        $result = $loader->getMessages();

    } catch (Exception $e) {
        echo $e->getMessage();  # ef við náum ekki að nota Upload class
    }
}
?>


<!DOCTYPE HTML>
<html>
<head><?php include 'include/assets.php'; ?></head>
<body>

<?php include 'include/header.php'; ?>

<?php
include 'include/database.php';
$db = new database();
?>

<div class="container">
    <h1><?php echo $db->currentUserName() ?></h1>


    <form action="photos.php" method="post" enctype="multipart/form-data" id="uploadImage">
        <div class="file-field input-field">
            <div class="btn">
                <span>File</span>
                <input type="file" name="image" id="image">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Upload one or more files">
            </div>
        </div>
        <input type="submit" name="upload" id="upload" value="Upload">
    </form>

    <?php
    if(!is_null($file_url )){
        ?>
        <img src="<?php echo $file_url ?>" alt="">
        <?php
    }
    ?>

</div>


    <?php include 'include/footer.php'; ?>
</body>
</html>