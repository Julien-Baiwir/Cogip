<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/src/output.css">
    <title>Cogip</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#invoices-link").click(function(e){
        e.preventDefault();
        $("#main-content").empty().load("/invoices/index.php");
    });
});
</script>

    <style>
      #menu-toggle:checked + #navbar {
        display: block;
      }
  </style>
</head>
<body>
    <header class="bg-yellow-300 ">
       <?php require 'views/includes/header.php'; ?> 
       <section class="flex flex-col justify-center items-center font-black mt-10 lg:flex-row">
            <h1 class="uppercase font-inter text-4xl text-center lg:text-6xl">Manage your customers and invoices easly</h1>
            <img src="assets/images/header.png" alt="" class="hidden">
        </section>
        <!-- <div class="m-0 flex justify-center"><img src="assets/images/rectangle.svg" alt="" ></div> -->
    </header>
    <main id="main-content">
    <!-- Le contenu de votre page sera chargé ici -->

</main>
    <footer>
        <?php require 'views/includes/footer.php'; ?>
    </footer>
</body>

</body>
