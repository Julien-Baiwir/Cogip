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
    <header class="bg-yellow-300 ">
       <?php require 'views/includes/header.php'; ?> 
       <section class="flex flex-col items-center font-black lg:flex-row lg:p-14">
          <h1 class="uppercase font-inter text-4xl text-center lg:text-6xl lg:text-left ">Manage your customers and invoices easly</h1>
          <img src="assets/images/header.png" alt="" class="overflow-hidden">
        </section>
        <!-- <div class="absolute"><img src="assets/images/rectangle.svg" alt="" class="h-20 relative bottom-10 left-14 lg:bottom-24"></div> -->
    </header>
    <footer>
        <?php require 'views/includes/footer.php'; ?>
    </footer>
</body>
