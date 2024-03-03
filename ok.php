<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Details</title>
</head>
<body>
    <h1>Company Details</h1>
    <?php if ($company): ?> <!-- Utilisez $company au lieu de $details -->
        <h2>Name: <?= $company->getName() ?></h2>
        <!-- Ajoutez d'autres informations ici en utilisant les méthodes correspondantes de l'objet $company -->
    <?php else: ?>
        <p>No company details found.</p>
    <?php endif; ?>
</body>
</html>


