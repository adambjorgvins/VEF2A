<html>
<head><?php include 'include/assets.php'; ?></head>
<body>

<?php include 'include/header.php'; ?>


<div class="container">
    <div class="row">
        <div class="col s12">
            <img class="random-image" src="" alt="">
        </div>
    </div>
</div>



<div class="container">
    <div class="row white-text">
        <form action="signin.php" method="post" class="col s12">

            <div class="row">
                <div class="input-field col s6">
                    <input  id="first_name" name="x" type="text" class="validate">
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                    <input id="last_name" name="last_name" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <select>
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1">In what year was your father born?</option>
                        <option value="2">What was the name of your elementary / primary school?</option>
                        <option value="3">What time of the day were you born? (hh:mm)</option>
                    </select>
                    <label>Security Questions</label>
                </div>

                <div class="input-field col s6">
                    <input id="email" type="text" class="validate">
                    <label  for="email">Answer</label>
                </div>
            </div>
            <div class="row">
                 <div class="input-field col s6">
                    <input id="mainPassword" type="password" class="js_password_check validate">
                    <label for="mainPassword">Password</label>
                 </div>
                <div class="input-field col s6">
                    <input id="retypePassword" type="password" class="js_password_check validate">
                    <label for="retypePassword">Password again</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label  for="email">Email</label>
                </div>
            </div>

            <?php
            $errors = [];
            $missing = [];
            // check if the form has been submitted
            if (isset($_POST['send'])) {
                // email processing script
            }
            ?>


            <div class="row">
                <div class="g-recaptcha" data-sitekey="6LcU4xgTAAAAAHmNFqoFIH1Xf06tu-d8UQvh_FU2"></div>
            </div>

            <div class="row">
                <button class="btn waves-effect waves-light" type="submit" name="action">Register
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>

    </div>
</div>

<?php include 'include/footer.php'; ?>
</body>


</html>