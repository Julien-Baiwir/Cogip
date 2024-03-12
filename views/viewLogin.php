<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/src/output.css">
    <title>Cogip Login</title>

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
      .underline-text {
        text-decoration: underline;
      }
  </style>
</head>
<body>
  <main>
    <div class="m-3 font-display text-base lg:text-xl">
      <h2 class='text-center pt-10 font-bold text-xl lg:text-6xl'>Login</h2>
      <form action="login.php" method="post" class='flex flex-col justify-center items-center p-2 gap-2'>
          <label for="username">Username :
          <input type="text" id="username" name="username" placeholder='enter your username'></label>
          <label for="password">Password :
          <input type="password" id="password" name="password" placeholder='enter your password'></label>
          <br>
          <input type="submit" value="Connexion" class='border border-black p-2 rounded-3xl hover:bg-yellow-300'>
      </form>
    </div>
    <div class="flex flex-col text-xl">
      <p class='font-bold underline-text'>Users :</p> 
      <a href="index.php?url=dashboard">Jesus Christ</a>
      <a href="index.php?url=dashboard">Jean-Michel Delacompta</a>
    </div>     
  </main>
</body>
</html>
