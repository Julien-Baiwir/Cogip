<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <style>
        header {
            border-bottom: 2px solid orange; 
        }
    </style>
        <style>
        footer {
            border-top: 2px solid orange; /* Ajoute une bordure orange en haut du footer */
        }
    </style>
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