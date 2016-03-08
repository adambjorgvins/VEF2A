<?php
// ef til dæmis lykilorð er ekki með hástaf eða lágstaf
// þá getum við sett inn villu í þennan array
$errors = [];
$missing = [];
require_once('include/User.php');
if(isset($_POST['action'])){
    $expected = ['login_email', 'login_password'];
    $required = $expected;

    require 'include/process.php';

    if (!($missing || $errors)){
        // the form was posted (user pressed submit)
        $login_email = $_POST['login_email'];
        $login_password = $_POST["login_password"];


        $user = new User();
        $registerOk = $user->register($login_email,$login_password);
        if($registerOk){
            header('Location: '.'signin.php');
        }
    }
}

?>


<html>
<head><?php include 'include/assets.php'; ?></head>
<body>


<?php include 'include/header.php'  ?>
<div class="container">
    <div class="row">
        <div class="col s12">
            <img class="random-image" src="" alt="">
        </div>
    </div>


    <div class="container">
        <div class="row">
            <form action="vefur/website/photos.php">


                <div class="col s12 center-align">
                    <h1 id="hero-title" itemprop="description" style="font-size: 46px;"><span class="bold">Forgot your password?</span></h1>
                </div>


                    <div class="input-field col s12">
                        <input id="email" type="email" name="login_email" class="validate js_missing_validation">
                        <span class="warning <?php if (!($missing && in_array('login_email', $missing))) { ?>hidden<?php } ?>">Please enter your email</span>
                        <label for="email">Email</label>
                    </div>




                    <button class=" btn  btn-large waves-effect waves-light col s5" type="submit" name="action">Send verification link
                        <i class="material-icons right">send</i>
                    </button>




            </form>
        </div>
    </div>


    <?php include 'include/footer.php'; ?>
</body>
</html>