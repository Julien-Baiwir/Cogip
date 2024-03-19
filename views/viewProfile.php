<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/src/output.css">
    <title>Cogip Profile</title>

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
    <main>
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        ?>
        <?php foreach ($profile as $profile): ?>
        <section class="flex flex-row flex-wrap items-center justify-center gap-10 font-display m-5">
            <div>
                <h2 class="font-black p-2 text-4xl font-inter"><?php echo $profile->getName(); ?></h2>
                <br>
                <div class="font-display">
                    <p><span class="font-semibold">Name: </span><?php echo $profile->getName(); ?></p>
                    <p><span class="font-semibold">Phone: </span><?php echo $profile->getPhone(); ?></p>
                    <p><span class="font-semibold">Mail: </span><?php echo $profile->getEmail(); ?></p>
                    <p><span class="font-semibold">Company: </span><?php echo $profile->getCompanyName(); ?></p>                 
                </div>
            </div>
            <div class="m-5">
                <img src="assets/images/pp.jpg" alt="profil picture" class="rounded-xl w-[200px]">
            </div>       
        </section>
        <?php endforeach; ?>   
    </main>  
</body>
</html>