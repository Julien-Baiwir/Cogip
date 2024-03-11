<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password :</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Connexion">
    </form>
    <div>
    <br><br>  
    <p>Users:</p> 
    <p><a href="index.php?url=dashboard">Jesus Christ</a></p>
    <p><a href="index.php?url=dashboard">Jean-Michel Delacompta</a></p>
    </div> 

</body>
</html>
