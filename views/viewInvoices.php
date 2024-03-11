<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/src/output.css">
    <title>Cogip Invoices</title>

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

    if(isset($invoices) && is_array($invoices) && count($invoices) > 0) {
        echo "<h1>All invoices</h1>";
        echo "<table>";
        echo "<tr>";
        echo "<th>Invoice number</th>";
        echo "<th>Due dates</th>";
        echo "<th>Company</th>";
        echo "<th>Created at</th>";
        echo "</tr>";
        foreach($invoices as $invoice) {
    ?>
        <tr>
            <td><?= $invoice->getRef() ?></td>
            <td><?= $invoice->getUpdate_at() ?></td>
            <td><?= $invoice->getCompany_name() ?></td>
            <td><?= $invoice->getCreated_at() ?></td>
        </tr>
    <?php
        }
        echo "</table>";
    } ?>
</body>
</html>



