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
      <section>
        <?php
        if ($isLoggedIn) {
          require 'views/includes/welcomeMessage.php';
        }
        ?>
      </section>
      <section class="flex items-center flex-col gap-10 py-10">
        <div id="lastInvoices" class="w-4/5">
          <h2 class="font-inter text-5xl font-black py-10">Last Invoices</h2>
          <table class="w-full text-start table-auto font-display font-semibold text-sm">
            <tr class="bg-yellow-300 ">
              <th class="text-start p-2">Invoices number</th>
              <th class="text-start p-2">Dates due</th>
              <th class="text-start p-2">Company</th>          
              <th class="text-start p-2">Created at</th>
            </tr>
            <tr>
              <td class="p-2">Name</td>
              <td class="p-2">Phone</td>
              <td class="p-2">Company</td>          
              <td class="p-2">Created at</td>
            </tr>
            <tr class="bg-[#F5F5F5]">
              <td class="p-2">Name</td>
              <td class="p-2">Phone</td>
              <td class="p-2">Company</td>          
              <td class="p-2">Created at</td>
            </tr>
          </table>
        </div>
        <div id="lastContacts" class="w-4/5">
          <h2 class="font-inter text-5xl font-black py-10">Last Contacts</h2>
          <table class="w-full text-start table-auto font-display font-semibold text-sm">
            <tr class="bg-yellow-300">
              <th class="text-start p-2">Name</th>
              <th class="text-start p-2">Phone</th>
              <th class="text-start p-2">Mail</th>
              <th class="text-start p-2">Company</th>          
              <th class="text-start p-2">Created at</th>
            </tr>
            <tr>
              <td class="p-2">Name</td>
              <td class="p-2">Phone</td>
              <td class="p-2">Mail</td>
              <td class="p-2">Company</td>          
              <td class="p-2">Created at</td>
            </tr>
            <tr class="bg-[#F5F5F5]">
              <td class="p-2">Name</td>
              <td class="p-2">Phone</td>
              <td class="p-2">Mail</td>
              <td class="p-2">Company</td>          
              <td class="p-2">Created at</td>
            </tr>
          </table>
        </div>
        <div id="lastCompagnies" class="w-4/5">
          <h2 class="font-inter text-5xl font-black py-10">Last Compagnies</h2>
          <table class="w-full text-start table-auto font-display font-semibold text-sm">
            <tr class="bg-yellow-300 ">
              <th class="text-start p-2">Name</th>
              <th class="text-start p-2">TVA</th>
              <th class="text-start p-2">Country</th>
              <th class="text-start p-2">Type</th>         
              <th class="text-start p-2">Created at</th>
            </tr>
            <tr>
              <td class="p-2">Name</td>
              <td class="p-2">Phone</td>
              <td class="p-2">Mail</td>
              <td class="p-2">Company</td>          
              <td class="p-2">Created at</td>
            </tr>
            <tr class="bg-[#F5F5F5]">
              <td class="p-2">Name</td>
              <td class="p-2">Phone</td>
              <td class="p-2">Mail</td>
              <td class="p-2">Company</td>          
              <td class="p-2">Created at</td>
            </tr>
          </table>
        </div>
      </section>
      <section class="flex flex-col items-center font-black lg:flex-row lg:p-14 p-8">
        <p class="uppercase font-inter text-4xl text-center lg:text-6xl lg:text-left">Work better in your Compagny</p>
        <img src="assets/images/homepage.png" alt="" class="overflow-hidden">
      </section>
    </main>
    <?php require 'views/includes/footer.php'; ?>
</body>
