<html>
<head><?php include 'assets.php'; ?></head>
<body>
<?php include 'header.php'; ?>





<div class="container">
    <div class="row">
        <form action="signin.php" class="col s12">

            <div class="row">
                <div class="input-field col s6">
                    <input  id="first_name" type="text" class="validate">
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                </div>
            </div>


            <div class="row">
                <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>

            <div class="row">
                <button class="btn waves-effect waves-light" type="submit" name="action">Register
                    <i class="material-icons right">send</i>
                </button>
            </div>

        </form>
    </div>
</div>


<?php include 'footer.php'; ?>
</body>
</html>