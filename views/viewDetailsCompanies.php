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
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ?>

    <?php foreach ($detailsCompanies  as $detailsCompany): ?>
        <h1><?php echo $detailsCompany->getCompanyName(); ?></h1>
        <p>Name: <?php echo $detailsCompany->getCompanyName(); ?></p>
        <p>Tva: <?php echo $detailsCompany->getTva(); ?></p>
        <p>Country: <?php echo $detailsCompany->getCountry(); ?></p>
        <p>Type: <?php echo $detailsCompany->getTypeName(); ?></p>
    <?php endforeach; ?>

    <h2>Contact people</h2>

    <?php foreach ($detailsContacts as $detailsContact): ?>
        <p>
        <a href="index.php?url=profile/<?php echo $detailsContact->getId(); ?>">
                <?php echo $detailsContact->getName(); ?>
            </a>
        </p>
    <?php endforeach; ?>


    <h2>Last invoices</h2>

    <table>
        <thead>
            <tr>
                <th>Invoice Number</th>
                <th>Date de mise à jour</th>
                <th>Company</th>
                <th>Created at</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($detailsInvoices as $detailsInvoice): ?>
                <tr>
                    <td><?php echo $detailsInvoice->getRef(); ?></td>
                    <td><?php echo $detailsInvoice->getUpdatedAt(); ?></td>
                    <td>
                        <?php
                        foreach ($detailsCompanies as $detailsCompany) {
                                $companyName = $detailsCompany->getCompanyName(); }
                        echo $companyName;
                        ?>
                    </td>
                    <td><?php echo $detailsInvoice->getCreatedAt(); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>    
</body>
</html>





