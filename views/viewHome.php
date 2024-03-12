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
        position: fixed;
        top: 5rem;
        left: 0;
        padding-left: 1rem;
        padding-right: 1rem;
        z-index: 9999;
        background-color: white;
      }

      tr:nth-child(even) {
        background-color: #f2f2f2;
      }
  </style>
</head>
<body>
    <main>
      <section class="flex justify-center py-10 ">
        <!-- aperçu du message d'accueil (code mis en commentaire dans: welcomeMessage.php et HomePageController.php) -->
        <div id="welcome" class="text-xl bg-yellow-300 p-5 rounded-3xl shadow-md shadow-yellow-500"> 
          <p class="">Welcome, <span class="font-bold">username</span> !</p>
        </div>
        <?php
        /* if ($isLoggedIn) {
           require 'views/includes/welcomeMessage.php';
         } */
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
            <?php
              if(isset($fiveInvoices) && is_array($fiveInvoices) && count($fiveInvoices) > 0) {
                  foreach($fiveInvoices as $invoice) { ?>
                  <tr>
                      <td class="p-2"><?= $invoice->getRef() ?></td>
                      <td class="p-2"><?= $invoice->getUpdate_at() ?></td>
                      <td class="p-2"><?= $invoice->getCompany_name() ?></td>
                      <td class="p-2"><?= $invoice->getCreated_at() ?></td>
                  </tr>
            <?php } } else {
              echo "<p>No invoices available</p>";
            } ?>
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
            <?php
              if(!empty($fivecontacts)) { 
                foreach ($fivecontacts as $contact) {?>
                  <tr>
                      <td class="p-2"><?= $contact->getName() ?></td>
                      <td class="p-2"><?= $contact->getPhone() ?></td>
                      <td class="p-2"><?= $contact->getEmail() ?></td>
                      <td class="p-2"><?= $contact->getCompanyName() ?></td>
                      <td class="p-2"><?= $contact->getCreatedAt() ?></td>
                  </tr>
            <?php } } else {
              echo "<p>No contact available</p>";
            } ?>
          </table>
        </div>
        <div id="lastCompagnies" class="w-4/5">
          <h2 class="font-inter text-5xl font-black py-10">Last Companies</h2>
          <table class="w-full text-start table-auto font-display font-semibold text-sm">
            <tr class="bg-yellow-300 ">
              <th class="text-start p-2">Name</th>
              <th class="text-start p-2">TVA</th>
              <th class="text-start p-2">Country</th>
              <th class="text-start p-2">Type</th>         
              <th class="text-start p-2">Created at</th>
            </tr>
            <?php
              if(isset($fiveCompanies) && is_array($fiveCompanies) && count($fiveCompanies) > 0) {
                  foreach($fiveCompanies as $fivecomp) { ?>
                  <tr>
                      <td class="p-2"><?= $fivecomp->getName() ?></td>
                      <td class="p-2"><?= $fivecomp->getTVA() ?></td>
                      <td class="p-2"><?= $fivecomp->getCountry() ?></td>
                      <td class="p-2"><?= $fivecomp->getType_name() ?></td>
                      <td class="p-2"><?= $fivecomp->getCreated_At() ?></td>
                  </tr>
            <?php } } else {
              echo "<p>No compagnies available</p>";
            } ?>
          </table>
        </div>
      </section>
      <section class="flex flex-col items-center font-black lg:flex-row lg:p-14 p-8">
        <p class="uppercase font-inter text-4xl text-center lg:text-6xl lg:text-left">Work better in your Company</p>
        <img src="assets/images/homepage.png" alt="" class="overflow-hidden">
      </section>
    </main>
</body>
