<?php
session_start();
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
        $loginOk = $user->login($login_email,$login_password);
        if($loginOk){
            $_SESSION["user"] = $user;
            header('Location: '.'photos.php');
        }
    }
}

?>

<!DOCTYPE HTML>
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
        <form action="signin.php" method="post">


            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" name="login_email" class="validate js_missing_validation">
                    <span class="warning <?php if (!($missing && in_array('login_email', $missing))) { ?>hidden<?php } ?>">Please enter your email</span>
                    <label for="email">Email</label>
                </div>
            </div>


            <div class="row">
                <div class="input-field col s12">
                    <input id="password" type="password" name="login_password" class="validate js_missing_validation">
                    <span class="warning <?php if (!($missing && in_array('login_password', $missing))) { ?>hidden<?php } ?>">Please enter your password</span>
                    <label for="password">Password</label>
                </div>
            </div>

<div class="row">
    <div class="input-field col s12">
    <a href="forgotten.php">forgot password?</a>
        </div>
</div>

            <div class="row">
                <button class="btn waves-effect waves-light" type="submit" name="action">Sign in
                    <i class="material-icons right">send</i>
                </button>
            </div>



       </form>
    </div>
</div>


<?php include 'include/footer.php'; ?>
</body>
</html>