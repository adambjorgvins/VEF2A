<html>
<head><?php include 'assets.php'; ?></head>
<body>
<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
        <form action="photos.php">

            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
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


<?php include 'footer.php'; ?>
</body>
</html>