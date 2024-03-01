<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $t ?></title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php?url=companies">Companies</a></li>
            <li><a href="index.php?url=contacts">Contacts</a></li>
            <li><a href="index.php?url=invoices">Invoices</a></li>
        </ul>
    </nav>
</header>

    <?= $content ?>

    <footer>
    <p>&copy; 2024 Cogip Tous droits réservés.</p>
</footer>

    
</body>
</html>