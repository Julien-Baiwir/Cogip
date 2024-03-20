<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Inscription</title>
</head>
<body>
    <h2>Sign Up</h2>
    <form action="index.php?url=signup" method="POST">
        <input type="hidden" name="type" value="signup">
        <label for="first_name">First Name:</label><br>
        <input type="text" id="first_name" name="first_name"><br>
        <label for="last_name">Last Name:</label><br>
        <input type="text" id="last_name" name="last_name"><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="password">Password :</label><br>
        <input type="password" id="password" name="password"><br>
        <label for="password">Repeat Password:</label><br>
        <input type="password" id="passwordsecure" name="passwordsecure"><br><br>
        <input type="submit" value="Inscription">
    </form>

</body>
</html>
