<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/src/output.css">
    <title>Cogip Contacts</title>

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
    if(isset($contacts) && is_array($contacts) && count($contacts) > 0): ?>
    <h2>All contacts</h2>
    <table>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Company</th>
                <th>Created at</th>
            </tr>
            <?php foreach($contacts as $contact): ?>
                <tr>
                    <td><?= $contact->getName() ?></td>
                    <td><?= $contact->getPhone() ?></td>
                    <td><?= $contact->getEmail() ?></td>
                    <td><?= $contact->getCompanyName() ?></td>
                    <td><?= $contact->getCreatedAt() ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No contacts available</p>
    <?php endif; ?>
</body>
</html>

