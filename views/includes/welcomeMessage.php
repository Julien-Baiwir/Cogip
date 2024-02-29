<div id="welcome">
    <?php 
    if ($idLoggedIn) {
        $username = UserModel::getUsername();
        echo "<p> Welcome, $username !</p>"
    }
    ?>
</div>