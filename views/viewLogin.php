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
  <main class='p-12'>
    <h2 class='text-center'>Login</h2>
    <form action="login.php" method="post" class='flex flex-col justify-center items-center'>
        <label for="username">Username:
        <input type="text" id="username" name="username" placeholder='enter your name'></label>
        <label for="password">Password :
        <input type="password" id="password" name="password" placeholder='enter your password'></label>
        <input type="submit" value="Connexion" class='border black'>
    </form>
    <div>
    <p>Users:</p> 
      <p><a href="index.php?url=dashboard">Jesus Christ</a></p>
      <p><a href="index.php?url=dashboard">Jean-Michel Delacompta</a></p>
    </div>     
  </main>
</body>
</html>
