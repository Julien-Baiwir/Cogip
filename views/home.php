<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/src/output.css">
    <title>Cogip</title>

    <style>
      #menu-toggle:checked + #navbar {
        display: block;
      }
  </style>
</head>
<body>
       <?php 
       $isHomePage = true;
       require 'views/includes/header.php'; 
       ?> 
    <main>
      <section id="lastInvoices">

      </section>
      <section id="lastContacts">

      </section>
      <section id="lastInvoices">

      </section>
      <section>

      </section>
    </main>
    <?php require 'views/includes/footer.php'; ?>
</body>
