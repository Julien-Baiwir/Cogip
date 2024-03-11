<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/src/output.css">
    <title>Cogip Connection</title>

    <style>
      #menu-toggle:checked + #navbar {
        display: block;
        position: fixed;
        top: 5rem;
        left: 0;
        padding-left: 1rem;
        padding-right: 1rem;
        z-index: 9999;
        background-color: white;
      }
  </style>
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
