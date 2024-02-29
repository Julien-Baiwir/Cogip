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
    <main class="flex items-center flex-col">
      <section id="lastInvoices" class="w-4/5">
        <h2 class="font-inter text-5xl font-bold py-10">Last Invoices</h2>
        <table class="w-full text-start table-auto font-display font-semibold text-sm">
          <tr class="bg-yellow-300 ">
            <th class="text-start p-2.5 pl-5">Invoices number</th>
            <th class="text-start">Dates due</th>
            <th class="text-start">Company</th>          
            <th class="text-start">Created at</th>
          </tr>
        </table>
      </section>
      <section id="lastContacts" class="w-4/5">
        <h2 class="font-inter text-5xl font-bold py-10">Last Contacts</h2>
        <table class="w-full text-start table-auto font-display font-semibold text-sm">
          <tr class="bg-yellow-300">
            <th class="text-start p-2.5 pl-3">Name</th>
            <th class="text-start p-2.5 pl-3">Phone</th>
            <th class="text-start p-2.5 pl-3">Mail</th>
            <th class="text-start p-2.5 pl-3">Company</th>          
            <th class="text-start p-2.5 pl-3">Created at</th>
          </tr>
          <tr>
            <td class="p-2.5">Name</td>
            <td class="p-2.5">Phone</td>
            <td class="p-2.5">Mail</td>
            <td class="p-2.5">Company</td>          
            <td class="p-2.5">Created at</td>
          </tr>
          <tr class="bg-[#F5F5F5]">
            <td class="p-2.5">Name</td>
            <td class="p-2.5">Phone</td>
            <td class="p-2.5">Mail</td>
            <td class="p-2.5">Company</td>          
            <td class="p-2.5">Created at</td>
          </tr>
        </table>
      </section>
      <section id="lastCompagnies" class="w-4/5">
        <h2 class="font-inter text-5xl font-bold py-10">Last Compagnies</h2>
        <table class="w-full text-start table-auto font-display font-semibold text-sm">
          <tr class="bg-yellow-300 ">
            <th>Name</th>
            <th>TVA</th>
            <th>Country</th>
            <th>Type</th>         
            <th>Created at</th>
          </tr>


        </table>
      </section>
      <section>

      </section>
    </main>
    <?php require 'views/includes/footer.php'; ?>
</body>
