<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/src/output.css">
    <title>Cogip Compagnies</title>

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
    <?php 
    if(isset($companies)): ?>
        <h2>All companies</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>TVA</th>
                <th>Country</th>
                <th>Type</th>
                <th>Created at</th>
            </tr>
            <?php foreach($companies as $company): ?>
                <tr>
    

                    <td><a href="index.php?url=details/<?= $company->getID() ?>"><?= $company->getName() ?></a></td>
                    <td><?= $company->getTva() ?></td>
                    <td><?= $company->getCountry() ?></td>
                    <td><?= $company->getType_name() ?></td>
                    <td><?= $company->getCreated_at() ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No companies available</p>
    <?php endif; ?>    
</body>
</html>


